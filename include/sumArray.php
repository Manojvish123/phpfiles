<?php 

$arr=[];

function sumarray($arr){
$sum=0;
for ($i=0;$i<count($arr);$i++){
    $sum += $arr[$i];
}
echo $sum;
}

sumarray([10,10,10,20]);

?>