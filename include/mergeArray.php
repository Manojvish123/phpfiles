<?php 
$arr1=[];
$arr2=[];
function mergeArray($arr1,$arr2){

$a1=  array_merge($arr1,$arr2);
foreach($a1 as $key){
    echo $key." ";
}
}
mergeArray([2,34,4,56,6],[23,3,43,56,67]);

?>