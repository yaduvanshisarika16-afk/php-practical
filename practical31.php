
<?php
// Existing associative array
$countries = array(
    "India" => "New Delhi",
    "France" => "Paris",
    "Japan" => "Tokyo"
);

// Add new key-value pair
$countries["Germany"] = "Berlin";

// Print the updated array
foreach($countries as $country => $capital) {
    echo $country . " => " . $capital . "<br>";
}
?>
