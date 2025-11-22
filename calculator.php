<?php
$num1 = 15.567;
$num2 = 7.234;

$n1 = round($num1, 2);
$n2 = round($num2, 2);

$add = round(abs($n1 + $n2), 2);
echo "Addition: $n1 + $n2 = $add<br>";

$sub = round(abs($n1 - $n2), 2);
echo "Subtraction: $n1 - $n2 = $sub<br>";

$mul = round(abs($n1 * $n2), 2);
echo "Multiplication: $n1 × $n2 = $mul<br>";

$div = round(abs($n1 / $n2), 2);
echo "Division: $n1 ÷ $n2 = $div<br>";
?>
