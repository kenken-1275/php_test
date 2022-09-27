<?php

function combine(string ...$name):string{ // ...という書き方で複数の引数を引き受けられるようになる。最後の:stringで戻り値の型も指定できる。
  $combinedName = "";
  for($i=0;$i<count($name);$i++){
    $combinedName .= $name[$i];
    if($i != count($name) - 1){
      $combinedName .= "・";
    }
  }
  return $combinedName;
}


$variableLength = combine("テスト1","テスト2","テスト3"); //関数呼び出しの引数は３つだが、上記...$nameという書き方で配列で渡せる。
echo $variableLength;

?>