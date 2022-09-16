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

echo "<br>";

$test = "1";

if(!empty($test)){
  echo "変数は空ではありません";
}

echo "<br>";

// 三項演算子
// 条件 ? 真：偽

$math = 80;

$comment = $math > 80 ? "good" : "not good";

echo $comment;

?>