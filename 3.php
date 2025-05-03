<?php
function resumenDeRangos($nums) {
    $result = [];
    $start = $nums[0];
    $end = $nums[0];

    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] === $end + 1) {
            $end = $nums[$i];
        } else {
            if ($start === $end) {
                $result[] = strval($start);
            } else {
                $result[] = $start . "->" . $end;
            }
            $start = $nums[$i];
            $end = $nums[$i];
        }
    }
    
    if ($start === $end) {
        $result[] = strval($start);
    } else {
        $result[] = $start . "->" . $end;
    }

    return $result;
}

$input = [0, 1, 2, 4, 5, 7];
print_r(resumenDeRangos($input));
?>
