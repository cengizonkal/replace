<?php

require __DIR__ . '/vendor/autoload.php';

use Replace\Replace;

class Test
{
    public $aValue;
    public $aArray;
}

$test = new Test();
$t2 = new Test();
$t3 = new Test();

$t2->aValue = 'c';
$t2->aArray = ['a', 'b', 'c'];

$test->aValue = 'a';
$test->aArray = ['a', 'b', 'c', 'p' => ['a', 'b', $t2]];
$map = ['a' => 'x', 'b' => 'y', 'c' => 'z'];

echo '<pre>';
var_dump($test);
Replace::replace($test, $map);
var_dump($test);

$t1 = 'a';
Replace::replace($t1, $map);
var_dump($t1);