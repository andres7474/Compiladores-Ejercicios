<?php
function intercalarListas($list1, $list2) {
    $result = [];
    $i = 0;
    
    while ($i < count($list1) || $i < count($list2)) {
        if ($i < count($list1)) {
            $result[] = $list1[$i];
        }
        if ($i < count($list2)) {
            $result[] = $list2[$i];
        }
        $i++;
    }

    return $result;
}

$list1 = [1, 2, 3];
$list2 = ['a', 'b'];
print_r(intercalarListas($list1, $list2));
?>
