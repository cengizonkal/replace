<?php

require __DIR__ . '/vendor/autoload.php';

use Replace\Replace;

class Test
{
    public $aValue;
    public $aArray;
}

$t1 = new Test();
$t2 = new Test();
$t3 = new Test();

$t2->aValue = 'c';
$t2->aArray = ['a', 'b', 'c'];

$t1->aValue = 'a';
$t1->aArray = ['a', 'b', 'c', 'p' => ['a', 'b', $t2]];
$map = ['a' => 'x', 'b' => 'y', 'c' => 'z'];

echo '<pre>';
var_dump($t1);
replace($t1, $map); // Replace::replace($test, $map);
var_dump($t1);

$t1 = 'a';
Replace::replace($t1, $map);
var_dump($t1);

$t1 = new Test();
$t1->aValue = 'c';
$t1->aArray = ['a', 'b', 'c'];
replace($t1, $map);
var_dump($t1);