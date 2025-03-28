<?php

$arr=[];
function findmax($arr){

for($i=1;$i<count($arr);$i++){
    if($arr[0]<$arr[$i]){
        $arr[0]=$arr[$i];
    }
}

echo $arr[0];
}
findmax([12,23,934,45]);

?>