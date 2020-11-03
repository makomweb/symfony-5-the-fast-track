# Prerequisites

## Install REDIS
~
Install Redis extension on your pc 

Download  the CORRECT version the DDL from the following link
https://pecl.php.net/package/redis/4.1.0/windows

Put the dll in the correct folder 
Wamp -> C:\wamp\bin\php\php-XXXX\ext
Laragon -> C:\laragon\bin\php\php-XXX\ext

Edit the php.ini file adding

extension=php_redis.dll

Restart server and check phpinfo(); . Now Redis should be there!
~

## Install RabbitMQ

~
@ AMQP installation php.net:

    Note to Windows users: This extension does not currently support Windows since the librabbitmq library does not yet support Windows.

But here at RabbitMQ website is a windows installer...

Apparently the information on the php.net page is outdated
To install do like this:

    Download the correct package for your php from this official PECL amqp page
    unzip
    add php_amqp.dll to your php ext folder and enable the extension inside your php.ini file: extension=php_amqp.dll
    add rabbitmq.#.dll to your windows system 32 folder (where # corresponds with the version number) - SysWOW64 on 64 Bit installations.

All this according to the post on the blog I found here.
~

## Check if install PHP version is thread-safe

~
php -i|findstr "Thread"
~