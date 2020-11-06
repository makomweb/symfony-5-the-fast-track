# Symfony 5 : The fast track

https://symfony.com/book

## Prerequisites

- install Git
- install Docker and Docker Compose
- install Redis
- install RabbitMQ

![image](./images/check-requirements.png)

## Start

`symfony new guestbook --version=5.0`

## SymfonyCloud

1. create a Symfony Connect account
2. follow the instructions to setup SymfonyCloud [here](https://symfony.com/doc/current/cloud/getting-started.html#installing-the-cli-tool)
3. use `symfony deploy` to deploy the app to SymfonyCloud

In case this can not be done due to vulnarability issues, upgrade the respective package, e.g.

`composer update symfony/http-kernel`

## Changing entities

Once the schema of an entity is changed follow these steps

1. create a migration `$ symfony console make:migration`
2. run the migration `$ symfony console doctrine:migrations:migrate`