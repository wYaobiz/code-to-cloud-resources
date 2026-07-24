# A CI/CD pipeline with GitHub Actions

A workflow that tests every push and deploys to a server only when the tests pass.

## How the two jobs relate

The `test` job installs PHP, brings up a MySQL service container, checks the syntax of every PHP file, and runs the test suite. The `deploy` job declares `needs: test`, so it does not start until the tests succeed, and the `if` condition limits deployment to the `main` branch. A pull request therefore gets tested but never deployed.

## Credentials

The host, username, and SSH key are read from repository secrets rather than written into the file. Secrets are set under Settings, then Secrets and variables, then Actions. Credentials committed to a repository stay in its history even after being removed, which is why they are kept out of the workflow itself.

## A live example

This resource site uses a workflow of the same shape. On every push to `main`, GitHub builds the documentation and publishes it, which is why the site updates a minute or two after a change is pushed.
