<?php

require '../vendor/autoload.php';

use BracketValidator\BracketValidator as B;

$input = file_get_contents('php://input');

try
{
    sleep(mt_rand(2,5));
    $res = B::process($input) ? 'TRUE' : 'FALSE';
}
catch (InvalidArgumentException $e)
{
    $res = 'Invalid Argument in position: ' . $e->getMessage();
}

echo $res . PHP_EOL;
