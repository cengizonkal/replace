<?php

require __DIR__ . '/vendor/autoload.php';

use Replace\Replace;

$map = ['a' => 'x', 'b' => 'y', 'c' => 'z'];
$aArray = ['a', 'b', 'c', 'p' => ['a', 'b']];
replace($aArray, $map);


class Test
{
    public $aValue;
    public $aArray;
}
$t1 = new Test();
$t1->aValue = 'c';
$t1->aArray = ['a', 'b', 'c'];
Replace::recursive($t1, $map);

var_dump($t1);