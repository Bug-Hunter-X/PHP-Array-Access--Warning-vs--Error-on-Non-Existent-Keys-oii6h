This code snippet demonstrates a common error in PHP when dealing with array keys that are not strictly numeric.  If you try to access an array element using a key that doesn't exist, PHP will issue a warning, but will not automatically create the key.  This is in contrast to Javascript, which will automatically create the key and assign it the value undefined.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];
echo $myArray['c']; // This will generate a warning, not an error. It will not create the key 'c'.
?>
```