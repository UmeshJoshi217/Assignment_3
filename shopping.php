<?php
$items = [
    ["name"=>"Laptop","price"=>75000],
    ["name"=>"Mouse","price"=>500],
    ["name"=>"Keyboard","price"=>1200]
];

echo "<h3>SHOPPING BILL</h3>";
$subtotal = 0;

foreach($items as $item){
    $price = number_format(round($item['price'],2),2);
    echo $item['name'] . ": Rs. " . $price . "<br>";
    $subtotal += $item['price'];
}

echo "--------------------------------<br>";

$vat = round($subtotal * 0.13,2);
$total = round($subtotal + $vat,2);

echo "Subtotal: Rs. " . number_format($subtotal,2) . "<br>";
echo "VAT (13%): Rs. " . number_format($vat,2) . "<br>";
echo "-------------------------------<br>";
echo "TOTAL: Rs. " . number_format($total,2);
?>
