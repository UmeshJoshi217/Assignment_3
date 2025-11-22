<?php
$birthdate = "2000-05-15";

$birth = new DateTime($birthdate);
$today = new DateTime();

$age = $today->diff($birth)->y;

echo "Birthdate: " . $birth->format("F d, Y") . "<br>";
echo "Current Date: " . $today->format("F d, Y") . "<br>";
echo "Age: $age years old";
?>
