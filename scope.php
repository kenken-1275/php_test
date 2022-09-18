<?php 

$global_variable = "グローバル変数です。";

// 関数内でグローバル変数を使いたい場合は、引数として渡すのが一般的。（global $global_variable）という記述で読み込めるは読み込めるがスマートじゃない。
function check_scope($str){
  $local_variable = "ローカル変数です。";
  echo $local_variable;
  echo $str;
}

echo $global_variable;

// 関数内の変数は外部では使えない。
echo $local_variable;

check_scope($global_variable);

?>