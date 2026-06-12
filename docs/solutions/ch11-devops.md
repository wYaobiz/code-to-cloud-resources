# Chapter 11 · Web Servers and Cloud DevOps

Selected solutions for the review questions on web servers, cloud deployment, scaling, monitoring, and CI/CD. See the [section introduction](index.md) for scope and the disclaimer.

### Problem 11.2
**Request flow through Apache to a PHP page.**

When a user requests a PHP page, Apache receives the HTTP request and determines that the target is a PHP file. Rather than returning the file directly, it passes the request to the PHP interpreter, often through a handler such as PHP-FPM. PHP executes the script, querying MySQL if needed, and produces output, typically HTML. Apache then wraps that output in an HTTP response and sends it back to the browser.

### Problem 11.3
**IaaS, PaaS, and SaaS.**

IaaS provides raw infrastructure such as virtual machines, leaving you to manage the operating system and software; an example is a cloud VM on which you install your own LAMP stack. PaaS provides a managed platform where you deploy code without managing servers; an example is a hosting platform that runs your PHP app for you. SaaS delivers finished software over the web, such as a hosted email service. The trade-off runs from maximum control and effort with IaaS to minimum control and effort with SaaS.

### Problem 11.4
**Blue-green vs. rolling deployment.**

A blue-green deployment runs two complete environments, one live and one idle, and switches all traffic to the updated environment at once, which makes rollback instant by switching back. A rolling deployment updates servers gradually, a few at a time, so the old and new versions run side by side during the rollout. Blue-green gives clean, fast switches at the cost of running two full environments, while rolling uses fewer resources but leaves mixed versions live during the transition.

### Problem 11.5
**Environment variables across environments.**

Environment variables hold configuration that differs between development, staging, and production, such as database credentials, so the same code runs everywhere without edits. The application reads these values at runtime instead of hard-coding them, which also keeps secrets out of the source.

```php
$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
```

### Problem 11.6
**Infrastructure as Code.**

Infrastructure as Code means defining servers and their configuration in version-controlled files rather than setting them up manually. It improves on traditional management by making environments reproducible, reviewable, and consistent, eliminating the configuration drift that creeps in with manual changes. Two common tools are Terraform, which provisions infrastructure declaratively across providers, and Ansible, which focuses on configuring and managing existing machines.

### Problem 11.9
**Vertical vs. horizontal scaling.**

Vertical scaling adds more resources, such as CPU or memory, to a single server, while horizontal scaling adds more servers and distributes load across them. Horizontal scaling typically requires the application to be stateless or to share state externally, for example moving session storage to a shared store, so that any server can handle any request. Vertical scaling is simpler but bounded by one machine's limits, while horizontal scaling grows further but demands these architectural changes.

### Problem 11.10
**How a CDN improves performance.**

A CDN caches copies of content on servers distributed around the world, so users are served from a nearby location rather than the origin, which reduces latency and offloads traffic from the origin server. It is best used for static assets such as images, CSS, JavaScript, and videos. These should be served with appropriate caching headers so the CDN and browsers know how long to keep each item.

### Problem 11.15
**Stages of a CI/CD pipeline.**

A typical pipeline installs dependencies, runs static analysis and linting, executes automated tests, builds a deployment artifact, and then deploys, often to staging first and to production after approval. Each stage adds a check: linting catches style and obvious errors, tests verify behavior, the build confirms the app assembles correctly, and staged deployment with health checks confirms it runs before reaching users.
