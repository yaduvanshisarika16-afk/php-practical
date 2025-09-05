<?php
// Step 1: Create associative array
$students = array(
    "Rahul" => 85,
    "Priya" => 90,
    "Amit"  => 78,
    "Sneha" => 92
);

// Step 2: Update one student’s marks (e.g., Amit)
$students["Amit"] = 88;

// Step 3: Print the updated array
foreach($students as $name => $marks) {
    echo $name . " => " . $marks . "<br>";
}
?>
