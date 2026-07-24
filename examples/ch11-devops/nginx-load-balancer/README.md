# Load balancing with Nginx

An Nginx configuration that distributes requests across three application servers and serves static files itself.

## What the pieces do

The `upstream` block lists the application servers and sets the balancing method. `least_conn` favors the server with the fewest open connections, which works better than plain round robin when some requests take much longer than others. The `max_fails` and `fail_timeout` settings take an unhealthy server out of rotation automatically and put it back after the timeout.

The `proxy_set_header` lines pass the original client details through. Without them the application sees every request as coming from the load balancer, so access logs and anything that depends on the client address would be misleading.

## Sessions across several servers

A request can land on any of the three servers, so PHP sessions stored on local disk will not be found on the next request. Shared session storage, such as Redis or a database, is what makes this work. This is the application change that horizontal scaling usually requires.

## Checking and reloading

```bash
sudo nginx -t
sudo systemctl reload nginx
```

`nginx -t` validates the configuration before the reload, so a syntax error does not interrupt the service.
