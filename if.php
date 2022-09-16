<?php 
$height = 90;
if($height == 90){
  echo "身長は" . $height . "cmです。";
}

// 以下は表示されない
$height = "90";
if($height === 90){
  echo "身長は" . $height . "cmです。";
}

// 以下は表示される
$height = "90";
if($height === "90"){
  echo "身長は" . $height . "cmです。";
}

// == 一致
// === 型まで一致

echo "<br>";


// else,elseif

$signal = "yellow";

if($signal === "red"){
  echo "止まれ";
}elseif($signal=="yellow"){
  echo "一旦停止";
}else{
  echo "進む";
}

?>