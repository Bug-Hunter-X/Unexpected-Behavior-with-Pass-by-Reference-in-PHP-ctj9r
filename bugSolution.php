```php
<?php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

// Correct usage:
$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// To modify a copy, create a new array:
$numbers = [1, 2, 3];
$numbersCopy = $numbers; //Creates a copy 
incrementArray($numbersCopy);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($numbersCopy); //Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

?>
```