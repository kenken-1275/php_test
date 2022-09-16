<?php 

$data = 1;

// break必要
// 下記の記述だと、== と === 同じように判定してしまう。

switch($data){
  case 1:
    echo "1です";
    break;
  case 2:
    echo "2です";
    break;
  case 3:
    echo "3です";
    break;
  default:
    echo "1-3ではありません";
}

// 下記の記述になると、厳密に型まで判定することができる。
// 文字列と数値を比べているので、defaultが実行される。

$data = 1; 

switch($data){
  case $data === 1:
    echo "1です";
    break;
  case 2:
    echo "2です";
    break;
  case 3:
    echo "3です";
    break;
  default:
    echo "1-3ではありません";
}

// if文で書いた方がシンプルはシンプル

if($data === 1){
  echo "1です";
}

if($data === 2){
  echo "2です";
}

if($data === 3){
  echo "3です";
}


?>