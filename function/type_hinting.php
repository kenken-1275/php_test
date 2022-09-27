<?php

function noTypeHint($string){
  var_dump($string);
}

noTypeHint(["テスト"]); //引数に型の指定はないのでエラーは出ない。
echo "<br>";

// 以下タイプヒンティング（型の指定）
function typeTest(string $string){ //string以外にも、array,int,bool,floatなどの指定がある。
  var_dump($string);
}

typeTest(["配列文字"]); //呼び出し時の引数は配列(array型)、でも呼び出されている関数の引数の指定がstring型なのでエラーが出る。

?>