# php2shell-demo

A small PHP app that pins PHP releases affected by PHP2Shell (CVE-2026-109618, CVE-2026-109619), kept on purpose to
show what [Harbyn](https://harbyn.com) does when a runtime gets a critical fix.

**Do not deploy this.** The pinned versions are vulnerable on purpose, and the app is fictional. This repository is public
for the demonstration only and will be archived afterwards.

What it pins:

| File | Declares | Kind |
| --- | --- | --- |
| `Dockerfile` | `php:8.3.35-fpm` | exact patch, affected (fixed in 8.3.36) |
| `composer.json` | `config.platform.php` 8.3.35, `require.php` ^8.3 | exact patch, and a constraint |
| `.github/workflows/ci.yml` | setup-php `8.3` | floating: installs the newest 8.3 patch on every run |
| `docker-compose.yml` | `php:8.4-cli` | floating tag: follows the newest 8.4 patch |
| `docker/legacy/Dockerfile` | `php:8.1-apache` | end-of-life branch: no fixed release |

The Harbyn workflow (`.github/workflows/harbyn.yml`) scans the repository against Harbyn's signed change feed and,
on a paid plan, opens a pull request that moves the exact pins to the fixed patch of the same branch. A person reviews
and merges it; Harbyn never merges and never writes to `main`.
