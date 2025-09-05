<?php
// Step 1: Create associative array
$countries = array(
    "India"   => "New Delhi",
    "France"  => "Paris",
    "Japan"   => "Tokyo",
    "Germany" => "Berlin"
);

// Step 2: Value to search
$capital = "Paris";

// Step 3: Use array_search()
$country = array_search($capital, $countries);

if($country !== false) {
    echo "The capital city '$capital' belongs to: $country";
} else {
    echo "The capital city '$capital' was not found in the array.";
}
?>
