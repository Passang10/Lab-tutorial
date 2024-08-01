<?php
function findSingleNumber($arr) {
    $result = 0;
    foreach ($arr as $num) {
        $result ^= $num; // XOR operation
    }
    return $result;
}

// Example usage:
$input = array(5, 3, 4, 3, 4);
echo "The single number in the array is: " . findSingleNumber($input);
?>
