<?php
$comment = "This is a damn good product but the service is hell";
$badWords = ["damn", "hell"];

$censored = $comment;
$counter = 0;

foreach ($badWords as $word) {
    $count = substr_count(strtolower($censored), strtolower($word));
    if ($count > 0) {
        $censored = str_ireplace($word, str_repeat("*", strlen($word)), $censored);
        $counter += $count;
    }
}

echo "Original: $comment<br>";
echo "Censored: $censored<br>";
echo "Words censored: $counter";
?>
