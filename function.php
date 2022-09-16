<?php

// function test(引数1,引数2){
//    処理
//   return  戻り値;
// }

// 引数なし
// 戻り値なしの場合

function test(){
  echo "テストです";
}

test();

// 引数あり
// 戻り値なしの場合

function getComment($string){
  echo $string;
}

getComment("コメント");


// 引数なし
// 戻り値ありの場合

function getNumberOfComment(){
  return 5;
}

$num = getNumberOfComment();
echo $num;


// 引数2つ
// 戻り値ありの場合

function sumPrice($int1,$int2){
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3,5);

echo $total;

?>