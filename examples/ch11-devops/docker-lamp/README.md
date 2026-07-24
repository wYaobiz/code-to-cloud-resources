# Containerizing a LAMP application

A `Dockerfile` that packages a PHP application with Apache, and a `docker-compose.yml` that runs it together with MySQL.

Containers matter here because the image carries the exact PHP version, extensions, and Apache modules the application needs, so it behaves the same on a laptop, on a staging server, and in production.

## Running it

```bash
docker compose up --build
```

The application is then available at `http://localhost:8080`. The database is reachable from the application container at the hostname `db`, which is why the connection settings use `DB_HOST=db` rather than an address.

## Stopping it

```bash
docker compose down
```

Adding `-v` also removes the named volume, which deletes the database data.
