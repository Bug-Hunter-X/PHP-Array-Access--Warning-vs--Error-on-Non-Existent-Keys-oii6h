```php
<?php
$myArray = ['a' => 1, 'b' => 2];

// Check if the key 'c' exists before accessing it
if (array_key_exists('c', $myArray)) {
  echo $myArray['c'];
} else {
  echo "Key 'c' does not exist.";
}

//Alternative using isset()
if (isset($myArray['c'])) {
  echo $myArray['c'];
} else {
  echo "Key 'c' does not exist.";
}
?>
```