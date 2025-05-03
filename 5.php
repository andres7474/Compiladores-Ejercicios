<?php
function rotarPalabras($str, $k) {
    $words = explode(" ", $str);
    $n = count($words);

    $k = $k % $n;

    $rotated = array_merge(array_slice($words, -$k), array_slice($words, 0, -$k));

    return implode(" ", $rotated);
}

$input = "uno dos tres cuatro";
$k = 1;
echo rotarPalabras($input, $k);
?>
