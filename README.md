# Facebook Business SDK for PHP

- PHP version -- 7.2
- Composer version -- 1.9.2
- EC2 Ubuntu ( 18.04 )
- php curl for php ( version 7.2 )

### Composer

The Facebook Business SDK uses composer to manage dependencies. Visit the <a href="https://getcomposer.org/download/" target="_blank">composer documentation</a> to learn how to install composer.

Add the following to your `composer.json` file:

```json
{
    "require": {
        "facebook/php-business-sdk": "5.0.5"
    }
}
```
then install it through composer:

```shell
php composer.phar install --no-dev
```

This SDK and its dependencies will be installed under `./vendor`.


## Fields and Variables

- https://developers.facebook.com/docs/marketing-api/insights/parameters/v5.0