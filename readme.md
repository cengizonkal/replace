Recursive replace
====
PHP Recursive replace for any type of object
### Usage
```php 
   $map = ['a' => 'x', 'b' => 'y', 'c' => 'z'];
   $aArray = ['a', 'b', 'c', 'p' => ['a', 'b']];
   replace($aArray, $map); 
   // Result ['x', 'y', 'z', 'p' => ['x', 'y']];
   
   class Test
   {
       public $aValue;
       public $aArray;
   }
   $t1 = new Test();
   $t1->aValue = 'c';
   $t1->aArray = ['a', 'b', 'c'];
   replace($t1, $map);
   /**
   object(Test)#3 (2) {
     ["aValue"]=>
     string(1) "z"
     ["aArray"]=>
     array(3) {
       [0]=>
       string(1) "x"
       [1]=>
       string(1) "y"
       [2]=>
       string(1) "z"
     }
   }
   **/
   

