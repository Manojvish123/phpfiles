<?php

$arr=[12,3,4,5,4,6,4,5];
$countArr=[];

foreach( $arr as $num){
    if (isset($countArr[$num])){
        $countArr[$num]++;
    }
    else{
        $countArr[$num]=1;
    }
}
print_r($countArr);
?>