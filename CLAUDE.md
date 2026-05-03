# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# Install dependencies
composer install

# Start the database
docker-compose up -d

# Clear Symfony cache
php bin/console cache:clear

# Database setup
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Run tests
php bin/phpunit
```

## Architecture

**Pushagenda** is a Symfony 7.0 PHP application (PHP 8.2+) serving a collection of personal mini-pages and interactive games. It uses PostgreSQL (via Docker) with Doctrine ORM, and Twig for templating.

### Request flow

```
public/index.php → src/Kernel.php → src/Controller/indexController.php → templates/*.html.twig
```

Routing uses PHP 8 attributes in controllers. `config/routes.yaml` scans `src/Controller/` automatically.

### Key directories

- `src/Controller/` — all routes live in `indexController.php`; each route renders a Twig template
- `templates/` — one Twig file per page/game; `base.html.twig` is the shared layout
- `config/packages/` — bundle configuration (Doctrine, Twig, Security, Mailer, Messenger, etc.)
- `migrations/` — Doctrine migration files (currently none)
- `assets/` — frontend assets managed by Symfony AssetMapper (no Node.js build step)

### Database

PostgreSQL 16 runs in Docker (`compose.yaml`). Connection string is in `.env` as `DATABASE_URL`. No entities are defined yet; Doctrine ORM is configured and ready.

### Frontend

Uses Symfony AssetMapper (`importmap.php`) with Bootstrap and Stimulus — no npm/webpack build step required.
