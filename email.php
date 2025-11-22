<?php
$email = "RAM.Sharma@EXAMPLE.com";
$cleaned = strtolower(trim($email)); 

echo "Original: $email<br>";
echo "Cleaned: $cleaned<br>";

if (strpos($cleaned, "@") !== false) {
    echo "Valid email format<br>";
    list($username, $domain) = explode("@", $cleaned);
    echo "Username: $username<br>";
    echo "Domain: $domain";
} else {
    echo "Invalid email! '@' symbol missing.";
}
?>
