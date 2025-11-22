<?php
function calculateAverage(...$marks){
    $total = array_sum($marks);
    $count = count($marks);
    return round($total / $count, 2);
}

echo "Average: " . calculateAverage(80, 90, 75) . "<br>";
echo "Average: " . calculateAverage(50, 60, 70, 80) . "<br>";
?>
