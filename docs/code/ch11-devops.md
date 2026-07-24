# Web Server and DevOps Examples

Configuration and automation examples for the web server and DevOps chapter. Unlike the earlier chapters, these are not programs that produce output. They are the configuration files and pipelines that run a web application in production, so each one is shown with an explanation of what it does and how to put it to use.

!!! note "About these examples"
    These files run on a server or in a build pipeline rather than in a browser, so there is no live preview. Paths, hostnames, and addresses are placeholders to replace with your own. Each example folder has a README with the commands to apply it.

## Apache

### Virtual host configuration

A virtual host lets a single Apache server host several sites, choosing the right one by matching the requested hostname. This configuration sets the document root, hands `.php` files to the PHP interpreter, controls directory behavior, writes per-site logs, and adds a few security headers.

```apache
# /etc/apache2/sites-available/myapp.conf
#
# A virtual host lets one Apache server host several sites. Apache picks the
# matching block by comparing the requested hostname against ServerName and
# ServerAlias.

<VirtualHost *:80>
    ServerName myapp.com
    ServerAlias www.myapp.com
    ServerAdmin admin@myapp.com

    DocumentRoot /var/www/myapp/public_html

    # Hand .php files to the PHP interpreter
    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

    <Directory /var/www/myapp/public_html>
        # -Indexes stops Apache listing directory contents when no index file exists
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    # Separate logs per site make troubleshooting far easier
    ErrorLog /var/www/myapp/logs/error.log
    CustomLog /var/www/myapp/logs/access.log combined

    # Basic security headers
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "DENY"
    Header always set X-XSS-Protection "1; mode=block"
</VirtualHost>
```

**Putting it to use:** Enable it with `a2ensite myapp.conf`, check the syntax with `apache2ctl configtest`, then reload Apache. Running the syntax check before reloading means a typo cannot take the server down.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch11-devops/apache-virtual-host/){ .md-button }

## Containers

### Dockerfile for a LAMP application

This image starts from the official PHP image with Apache already configured, adds the extensions the application needs, enables the Apache modules for clean URLs and headers, and copies the application in. Because the image pins the PHP version and extensions, the application behaves the same on a laptop as it does in production.

```dockerfile
# A LAMP application image built on the official PHP image with Apache.
# Starting from php:8.2-apache means Apache and PHP are already wired together.
FROM php:8.2-apache

# Install the system libraries the PHP extensions need, then the extensions.
# Combining the commands into one RUN keeps the image smaller, since each
# RUN adds a layer.
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*

# mod_rewrite is needed for clean URLs, mod_headers for security headers
RUN a2enmod rewrite headers

WORKDIR /var/www/html

COPY . /var/www/html/

# Apache runs as www-data, so it needs to own the files it serves
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
```

**Putting it to use:** The related `docker-compose.yml` in the same folder runs this image alongside MySQL, so `docker compose up --build` brings up the whole stack.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch11-devops/docker-lamp/){ .md-button }

### Compose file for the application and database

Compose runs the application container and a MySQL container together on one network. The application reaches the database at the hostname `db` rather than an address, and a named volume keeps the data when containers are recreated.

```yaml
# Runs the application container alongside a MySQL container.
# Compose puts both on one network, so the app reaches the database
# at the hostname "db" rather than an IP address.
services:
  app:
    build: .
    ports:
      - "8080:80"
    depends_on:
      - db
    environment:
      DB_HOST: db
      DB_NAME: myapp
      DB_USER: appuser
      DB_PASS: apppassword

  db:
    image: mysql:8.0
    environment:
      MYSQL_DATABASE: myapp
      MYSQL_USER: appuser
      MYSQL_PASSWORD: apppassword
      MYSQL_ROOT_PASSWORD: rootpassword
    volumes:
      # Named volume keeps the data when the container is recreated
      - dbdata:/var/lib/mysql

volumes:
  dbdata:
```

**Putting it to use:** Bring the stack up with `docker compose up --build` and reach the application at `http://localhost:8080`.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch11-devops/docker-lamp/){ .md-button }

## Continuous Integration and Deployment

### GitHub Actions workflow

This workflow tests every push and deploys only when the tests pass. The test job brings up a MySQL service container, checks the syntax of every PHP file, and runs the test suite. The deploy job declares `needs: test`, so it is skipped when tests fail, and the `if` condition limits deployment to the `main` branch, meaning a pull request is tested but never deployed.

```yaml
# .github/workflows/deploy.yml
#
# Runs on every push to main: checks the code, runs the tests, and deploys
# only if everything passed. Each job runs on a fresh virtual machine
# provided by GitHub.

name: Test and deploy

on:
  push:
    branches: [main]
  pull_request:
    branches: [main]

jobs:
  test:
    runs-on: ubuntu-latest

    # A MySQL service container for the tests to run against
    services:
      mysql:
        image: mysql:8.0
        env:
          MYSQL_ROOT_PASSWORD: rootpassword
          MYSQL_DATABASE: test_db
        ports:
          - 3306:3306
        options: >-
          --health-cmd="mysqladmin ping"
          --health-interval=10s
          --health-timeout=5s
          --health-retries=5

    steps:
      - uses: actions/checkout@v4

      - name: Set up PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.2'
          extensions: mbstring, pdo_mysql

      - name: Install dependencies
        run: composer install --prefer-dist --no-progress

      - name: Check syntax
        run: find . -name "*.php" -not -path "./vendor/*" -exec php -l {} \;

      - name: Run tests
        run: vendor/bin/phpunit

  deploy:
    # needs: test means this job waits for the tests and is skipped if they fail
    needs: test
    runs-on: ubuntu-latest
    # Only deploy from main, never from a pull request
    if: github.ref == 'refs/heads/main'

    steps:
      - uses: actions/checkout@v4

      - name: Deploy over SSH
        uses: appleboy/ssh-action@v1
        with:
          host: ${{ secrets.SSH_HOST }}
          username: ${{ secrets.SSH_USER }}
          key: ${{ secrets.SSH_KEY }}
          script: |
            cd /var/www/myapp
            git pull origin main
            composer install --no-dev --optimize-autoloader
            sudo systemctl reload apache2
```

**Putting it to use:** The server details and SSH key come from repository secrets rather than the file itself. Credentials committed to a repository remain in its history even after being deleted, which is why they are kept out. This resource site uses a workflow of the same shape, which is why it updates a minute or two after a push.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch11-devops/github-actions-deploy/){ .md-button }

## Scaling

### Nginx load balancer

Nginx sits in front of several application servers and spreads requests across them, which is horizontal scaling: more machines sharing the load rather than one larger machine. The `least_conn` method favors the server with the fewest open connections, and the failure settings take an unhealthy server out of rotation automatically.

```nginx
# /etc/nginx/sites-available/myapp
#
# Nginx sits in front of several application servers and spreads requests
# across them. This is horizontal scaling: instead of one bigger machine,
# several machines share the load.

upstream myapp_servers {
    # least_conn sends each request to the server with the fewest active
    # connections, which suits requests that vary in duration.
    least_conn;

    server 10.0.1.11:80 max_fails=3 fail_timeout=30s;
    server 10.0.1.12:80 max_fails=3 fail_timeout=30s;
    server 10.0.1.13:80 max_fails=3 fail_timeout=30s;

    # After 3 failures within 30 seconds Nginx stops sending traffic to a
    # server, then tries it again once the timeout passes.
}

server {
    listen 80;
    server_name myapp.com www.myapp.com;

    # Send everything to the pool of application servers
    location / {
        proxy_pass http://myapp_servers;

        # Without these the application only ever sees the proxy's address,
        # so logging and any address-based logic would be wrong.
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;

        proxy_connect_timeout 5s;
        proxy_read_timeout 60s;
    }

    # Serve static files straight from the proxy and let browsers cache them,
    # which keeps that traffic off the application servers entirely.
    location ~* \.(jpg|jpeg|png|gif|css|js|ico|svg)$ {
        root /var/www/static;
        expires 30d;
        add_header Cache-Control "public, immutable";
    }

    access_log /var/log/nginx/myapp_access.log;
    error_log  /var/log/nginx/myapp_error.log;
}
```

**Putting it to use:** The `proxy_set_header` lines pass the original client details through, without which the application would see every request as coming from the load balancer. Note also that a request can land on any server, so PHP sessions kept on local disk will not be found on the next request. Shared session storage is the application change that horizontal scaling usually requires.

[View full source](https://github.com/wYaobiz/code-to-cloud-resources/blob/main/src/ch11-devops/nginx-load-balancer/){ .md-button }
