## About ToMoney

A simple PHP library to convert a number to money format.


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


After installation, to dump the autoloader, execute
```
$ composer dump-autoload
```



## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use LinuxArtisan\ToMoney\Money;

echo Money::formatToIndian(123456127.73); // to Indian
// "12,34,56,127.73"

echo Money::formatToUS(123456127.73); // to US
// "123,456,127.73"

echo Money::formatTo('en_GB', 123456127.73); // to custom
// "123,456,127.73"
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


Also, if a particular locale is not supported, the same amount will be returned as a string without formatting.
```php
return Money::formatTo('some_unsupported_locale', 12345);
// "12345"
```


### Note

To view all the available locales on your system, give the following command in the terminal

```
$ locale -a
```
These locales may be used as argument to the `formatTo` function.
