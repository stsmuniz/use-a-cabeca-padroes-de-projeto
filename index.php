<?php

require 'app/bootstrap.php';

$redHead = new App\RedheadDuck();
$mallard = new App\MallardDuck();

echo $redHead->display() . PHP_EOL;
echo $redHead->fly() . PHP_EOL;
echo $mallard->display() . PHP_EOL;
echo $mallard->fly() . PHP_EOL;

