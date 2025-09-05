<?php
// Step 1: Create associative array
$fruits = array(
    "Mango" => 60,
    "Apple" => 120,
    "Banana" => 40,
    "Orange" => 80
);

// Step 2: Sort by values (asort)
echo "Sorted by values (Prices):<br>";
asort($fruits);
foreach($fruits as $fruit => $price) {
    echo $fruit . " => " . $price . "<br>";
}

// Step 3: Sort by keys (ksort)
echo "<br>Sorted by keys (Fruit Names):<br>";
ksort($fruits);
foreach($fruits as $fruit => $price) {
    echo $fruit . " => " . $price . "<br>";
}
?>
