<?php
$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];

echo "<b>PRICE COMPARISON</b><br><br>";
foreach ($prices as $site => $price) {
    echo "$site: Rs. " . number_format($price) . "<br>";
}

$maxKey = array_search(max($prices), $prices);
$minKey = array_search(min($prices), $prices);
$avg = array_sum($prices)/count($prices);
$savings = max($prices) - min($prices);

echo "<br>Statistics:<br>";
echo "Highest Price: Rs. " . number_format(max($prices)) . " ($maxKey)<br>";
echo "Lowest Price: Rs. " . number_format(min($prices)) . " ($minKey)<br>";
echo "Average Price: Rs. " . number_format($avg) . "<br>";
echo "Savings: Rs. " . number_format($savings) . " (if you buy from $minKey)<br>";

asort($prices);
echo "<br>Sorted by Price (Low to High):<br>";
foreach ($prices as $site => $price) {
    echo "$site: Rs. " . number_format($price) . "<br>";
}
?>
