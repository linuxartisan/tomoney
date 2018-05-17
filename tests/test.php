<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Convert\ConvertMoney;

echo ConvertMoney::toMoney(123456127.738);
