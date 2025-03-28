<?php

$arr = [12,23,34,45];
$revarr = [];

for ($i = count($arr) - 1; $i >= 0; $i--) {
    $revarr[] = $arr[$i];
}

echo "Reversed Array is :";
print_r($revarr);
?>
