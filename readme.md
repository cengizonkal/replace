Recursive replace
====
PHP Recursive replace for any type of object
### Usage
```php 
   $map = ['a' => 'x', 'b' => 'y', 'c' => 'z'];
   
   $aArray = ['a', 'b', 'c', 'p' => ['a', 'b']];
   
   replace($aArray, $map); 
   // Result ['x', 'y', 'z', 'p' => ['x', 'y']];

