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

## Create a schema in the database

`symfony console doctrine:schema:create`

## Changing entities

Once the schema of an entity is changed follow these steps

1. create a migration `$ symfony console make:migration`
2. run the migration `$ symfony console doctrine:migrations:migrate`

## In case you get a MIME type error

In case you get a MIME type error when uploading an image file during adding a comment.

This is because this extension is missing in the local `php.ini`. Add it.

`extension=php_fileinfo.dll`

## Add an admin into the database after the schema was updated

Create a hashed password string

```
$ symfony console security:encode-password
```

Copy the password string and edit the following query string.
Run this query in the command line

```
$ symfony run psql -c "INSERT INTO admin (id, username, roles, password) \
  VALUES (nextval('admin_id_seq'), 'admin', '[\"ROLE_ADMIN\"]', \
  '\$argon2id\$v=19\$m=65536,t=4,p=1\$lrWH0r5h1ebopSXBWeNx5A\$J09olQNIl/hzka+DiV7Umd8dsiN0sSAz3GBJoqbb3h8')"
```

If you can't run it from your command line *PgAdmin* can also be used to execute this query and insert the data into the admin table. Make sure the cell does not contain escaped dollar chars afterwards.

## Loading fixtures for different database

Prepare a different database string in your `.env.test` so that once `APP_ENV` is set to `test` this connection string can be used.

Load the fixtures with this command:

`symfony console doctrine:fixtures:load`

## Learning

Dump the Autoloader with this command `composer dump-autoload`.

Clear the cache with `php bin/console cache:clear`.

