 <?php


$arr=[12,2,4,4,5,5,6];

$unique = [];

foreach ($arr as $key=>$val)
 {
    if (!in_array($val, $unique)) {
        $unique[] = $val;
    }
}
print_r($unique);


?> 