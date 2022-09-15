<?php 
$array_1 = [1,2,3];
echo $array_1[1];

$array_2 = [
  ["赤","青","黄"],
  ["緑","紫","黒"]
];
echo "<pre>";
var_dump($array_2);
echo "</pre>";

echo $array_2[0][1];
?>