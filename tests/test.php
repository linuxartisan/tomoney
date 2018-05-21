<?php 

require __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use LinuxArtisan\ToMoney\Money;


print Money::formatToIndian(123456789.1234)."\n";
print Money::formatToIndian(123456127.73)."\n";
print Money::formatToIndian(123456127.731)."\n";
print Money::formatToIndian("123456127.738")."\n";
print Money::formatToIndian(-123456.738)."\n";
print Money::formatToIndian(123.12)."\n";
print Money::formatToIndian(1234.12)."\n";
print Money::formatToIndian("12abcd127.731")."\n";

print Money::formatToUS(123456127.73)."\n";
print Money::formatToUS(123456127.731)."\n";
print Money::formatToUS("123456127.738")."\n";
print Money::formatToUS(-123456.738)."\n";
print Money::formatToUS(123.12)."\n";
print Money::formatToUS(1234.12)."\n";
print Money::formatToUS("12abcd127.731")."\n";

print Money::formatTo('en_GB', 123456127.73)."\n";
print Money::formatTo('en_GB', 123456127.731)."\n";
print Money::formatTo('en_GB', "123456127.738")."\n";
print Money::formatTo('en_GB', -123456.738)."\n";
print Money::formatTo('en_GB', 123.12)."\n";
print Money::formatTo('en_GB', 1234.12)."\n";
print Money::formatTo('en_GB', "12abcd127.731")."\n";

print Money::formatTo('gibberish', 123456127.73)."\n";
print Money::formatTo('gibberish', 123456127.731)."\n";
print Money::formatTo('gibberish', "123456127.738")."\n";
print Money::formatTo('gibberish', -123456.738)."\n";
print Money::formatTo('gibberish', 123.12)."\n";
print Money::formatTo('gibberish', 1234.12)."\n";
print Money::formatTo('gibberish', "12abcd127.731")."\n";
