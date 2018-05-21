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


After installation, execute to dump the autoloader
```
$ composer dump-autoload
```


## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use LinuxArtisan\ToMoney\Money;

echo Money::formatToIndian(1234.56); // to Indian
echo Money::formatToUS(1234.56); // to US
echo Money::formatTo('en_GB', 1234.56); // to custom
```


Numeric values may be passed as strings too
```php

echo Money::formatToIndian('12345.67'); // to Indian
echo Money::formatToUS('1234.56'); // to US
echo Money::formatTo('en_GB', '1234.56'); // to custom
```

But this is not recommended, as a non-numeric string will be returned as '0'.
```php
return Money::formatTo('en_GB', "12abcd127.731");
```
will return `0` as a string.


Also, if a particular locale is not supported, the same amount will be returned without formatting as a string.

### Note

To view all the available locales on your system, give the following command in the terminal

```
$ locale -a
```
These locales may be used as argument to the `formatTo` function.
