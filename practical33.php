<?php
// Step 1: Create an associative array
$students = array(
    "Rahul" => 85,
    "Priya" => 90,
    "Amit"  => 78,
    "Sneha" => 92
);

// Step 2: Key to check
$key = "Amit";

// Step 3: Use array_key_exists()
if(array_key_exists($key, $students)) {
    echo "Key '$key' exists in the array with value: " . $students[$key];
} else {
    echo "Key '$key' does not exist in the array.";
}
?>
