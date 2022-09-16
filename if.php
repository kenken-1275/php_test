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
?>