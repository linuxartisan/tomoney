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


After installation, it is recommended to execute
```
$ composer dump-autoload
```

## Usage

Using composer:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use LinuxArtisan\ToMoney\Convert\ConvertMoney;

echo ConvertMoney::toIndian(1234.56);
echo ConvertMoney::toUS(1234.56);
```

