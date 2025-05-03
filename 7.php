<?php
function palabrasConLetrasUnicas($arr) {
    $result = [];

    foreach ($arr as $word) {

        $chars = str_split($word);

        if (count($chars) === count(array_unique($chars))) {
            $result[] = $word;
        }
    }

    return $result;
}

$input = ["hola", "casa", "perro", "luz"];
print_r(palabrasConLetrasUnicas($input));
?>
