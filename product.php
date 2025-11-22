<?php
$inventory = [
    ["id"=>101,"name"=>"Laptop","price"=>75000,"stock"=>10],
    ["id"=>102,"name"=>"Mouse","price"=>500,"stock"=>50],
    ["id"=>103,"name"=>"Keyboard","price"=>1200,"stock"=>0],
    ["id"=>104,"name"=>"Monitor","price"=>25000,"stock"=>5]
];

echo "PRODUCT INVENTORY<br><br>";
echo "ID | Name | Price | Stock<br>";
echo "----------------------------<br>";

$totalValue = 0;
$outOfStock = [];
$lowStock = [];

foreach ($inventory as $item) {
    echo "{$item['id']} | {$item['name']} | {$item['price']} | {$item['stock']}<br>";
    $totalValue += $item['price'] * $item['stock'];
    if ($item['stock'] == 0) $outOfStock[] = $item;
    elseif ($item['stock'] < 10) $lowStock[] = $item;
}

echo "\nOUT OF STOCK:<br>";
foreach ($outOfStock as $p) echo "- {$p['name']} (ID: {$p['id']})<br>";

echo "\nLOW STOCK (Need Reorder):<br>";
foreach ($lowStock as $p) echo "- {$p['name']} (ID: {$p['id']}) - Only {$p['stock']} units left<br>";

echo "\nTotal Inventory Value: Rs. $totalValue<br>";
?>
