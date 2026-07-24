# Apache virtual host

A virtual host configuration for a single PHP application, covering the document root, PHP handling, directory options, per-site logging, and basic security headers.

## Enabling it

```bash
sudo a2ensite myapp.conf
sudo apache2ctl configtest
sudo systemctl reload apache2
```

`a2ensite` creates the symlink in `sites-enabled`, and `configtest` checks the syntax before you reload, so a mistake does not take the server down.
