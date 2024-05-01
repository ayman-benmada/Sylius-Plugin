# Sylius Plugin

<p>
    This project allows me to test all the Sylius plugins I have developed.
</p>

## Prerequisites

Install Docker by following this link : https://docs.docker.com/engine/installation

## Setting up the environment

Start by cloning this repository.

Then copy the file `.env.template` to a file named `.env`. For instance:

```bash
cp .env.template .env 
```

**Next, make sure that there is no application running on port 80**, then start all the Docker containers with the
following commands:

```bash
docker-compose up -d
```

Enter your web container with docker exec :

```bash
docker exec -ti sylius_plugin_web bash
```

Install dependencies :

```bash
composer install
```

Install Sylius :

```bash
bin/console sylius:install
```

Install JS libraries using Yarn :

```bash
yarn install
yarn build
bin/console assets:install --ansi
```

Rebuild cache for proper display of all translations :

```bash
bin/console cache:clear
bin/console cache:warmup
```

## Project details

* Shop : http://sylius-plugin.localhost
* Back-office : http://sylius-plugin.localhost/admin
* PHPMyAdmin : http://pma.sylius-plugin.localhost
* Mailcatcher : http://mailcatcher.sylius-plugin.localhost
* Traefik : http://traefik.sylius-plugin.localhost
