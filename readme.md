## About ToMoney

A simple PHP library to convert a number to money format.

## Under Development

This library is still under development and hence is not ready for use.


## Installation

### With [Composer](http://getcomposer.org/)

```
$ composer require linuxartisan/tomoney
```

Alternatively, you may add the following in `composer.json` file.
```json
{
    "require": {
        "linuxartisan/tomoney": "*"
    }
}
```
And then execute
```
$ composer install
```

## Usage

Using composer:

```php
<?php

require 'vendor/autoload.php';

use Convert\ConvertMoney;

echo ConvertMoney::toMoney(1234.56);
```



