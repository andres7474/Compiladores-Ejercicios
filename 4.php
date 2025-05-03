<?php
function eliminarDuplicados($arr) {

    $seen = [];

    foreach (array_reverse($arr) as $value) {
        if (!isset($seen[$value])) {
            $seen[$value] = true;
        }
    }

    return array_keys($seen);
}

// Ejemplo de uso
$input = ["apple", "banana", "apple", "orange", "banana"];
print_r(eliminarDuplicados($input));
?>
