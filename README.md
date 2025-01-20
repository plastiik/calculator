# Symfony Docker

A [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework,
with [FrankenPHP](https://frankenphp.dev) and [Caddy](https://caddyserver.com/) inside!

![CI](https://github.com/dunglas/symfony-docker/workflows/CI/badge.svg)

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull always -d --wait` to set up and start a fresh Symfony project
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

## Github CI Jobs

![CI](https://github.com/plastiik/calculator/workflows/ci/badge.svg)
![PSALM](https://github.com/plastiik/calculator/workflows/psalm/badge.svg)
![SYMFONY](https://github.com/plastiik/calculator/workflows/symfony/badge.svg)

These are run to ensure standards (PSR-2) and that everything works correctly, the following checks are done:

1. Integrity of docker image and services
2. PHP Standards
3. Code Sniff's
4. HTTP Checks, to see if app is reachable
5. DB integrity checks
6. Symfony integrity checks
7. PHPUnit tests are run and passing
8. Check integrity of composer packages

All can be found within `.github/workflows/*`.

## Branches Protection

I could enforce more protections on branches, using a rules that can be read on here:
- https://docs.github.com/en/repositories/configuring-branches-and-merges-in-your-repository/managing-protected-branches/about-protected-branches
- https://docs.github.com/en/repositories/configuring-branches-and-merges-in-your-repository/managing-rulesets/about-rulesets

I'm not doing this as this would require someone to review my code and so on.

But an example of rules set would be:

1. Main branch is protected and can't commit directly to it
2. Branches can only be merged into main if code is reviewed and CI Jobs passing
