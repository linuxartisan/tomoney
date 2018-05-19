<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use LinuxArtisan\ToMoney\Convert\ConvertMoney;

print ConvertMoney::toIndian(123456127.73)."\n";
print ConvertMoney::toIndian(123456127.731)."\n";
print ConvertMoney::toIndian(123456127.738)."\n";
print ConvertMoney::toIndian(-123456.738)."\n";
print ConvertMoney::toIndian(123.12)."\n";
print ConvertMoney::toIndian(1234.12)."\n";

print ConvertMoney::toUS(123456127.73)."\n";
print ConvertMoney::toUS(123456127.731)."\n";
print ConvertMoney::toUS(123456127.738)."\n";
print ConvertMoney::toUS(-123456.738)."\n";
print ConvertMoney::toUS(123.12)."\n";
print ConvertMoney::toUS(1234.12)."\n";

