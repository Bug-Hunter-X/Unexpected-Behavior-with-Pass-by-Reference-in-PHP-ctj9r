```php
<?php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//Uncommon error:
$numbers = [1, 2, 3];
$numbersCopy = $numbers;
incrementArray($numbersCopy);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 ) // Unexpected!
?>
```