<!DOCTYPE html>
<html>
<head>
    <title>Question 1 - PHP Data Types</title>
</head>
<body>

<h2>Question 1: PHP Variables and Data Types</h2>

<?php

// Creating variables with different data types
$name = "Subekshya";
$age = 20;
$height = 5.3;
$isStudent = true;
$subjects = ["PHP", "MySQL", "JavaScript"];
$value = null;

// a. Display data using echo
echo "<h3>a. Using echo</h3>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Student: " . ($isStudent ? "Yes" : "No") . "<br>";

// Using print
echo "<h3>Using print</h3>";
print "Name: " . $name . "<br>";
print "Age: " . $age . "<br>";
print "Height: " . $height . "<br>";

// b. Display array using print_r()
echo "<h3>b. Array using print_r()</h3>";
echo "<pre>";
print_r($subjects);
echo "</pre>";

// Display array using var_dump()
echo "<h3>Array using var_dump()</h3>";
echo "<pre>";
var_dump($subjects);
echo "</pre>";

// c. Checking data types
echo "<h3>c. Checking Data Types</h3>";

echo "Is name a string? ";
var_dump(is_string($name));

echo "<br>Is age an integer? ";
var_dump(is_int($age));

echo "<br>Is height a float? ";
var_dump(is_float($height));

echo "<br>Is student a boolean? ";
var_dump(is_bool($isStudent));

echo "<br>Is subjects an array? ";
var_dump(is_array($subjects));

echo "<br>Is value NULL? ";
var_dump(is_null($value));

?>

</body>
</html>
