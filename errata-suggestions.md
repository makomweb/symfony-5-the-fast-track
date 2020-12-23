# Errata suggestions

## Vulnerability issues during deployment to SymfonyCloud

Chapter 11

In case deployment fails due to vulnaribility issues with `symfony/http-kernel` you should update the respective package.

`compose update symfony/http-kernel`

---

## Sass-Loader version

Chapter 22

While I was following the guidelines from the book I encoutered a problem with `Saas-Loader^8.0`.

Removing the version helped to get passed the point of building the assets.

`node-saas 5.0.0` in combination with `saas-Loader 10.1.0` worked fine for me.

yarn add node-sass sass-loader --dev

---

## Slack authentication is different with Symfony 5.1

Chapter 25

The book describes authentication using the "legacy token approach".

~~~
With Symfony 5.1 the use of Slack has changed significantly from Legacy Token to Incoming Webhooks.
The token approach was discouraged by Slack recently.
~~~

---

## Additional packages required for TWIG after upgrading to Symfony 5.1

Chapter 26

`composer require twig/cssinliner-extra twig/inky-extra`

