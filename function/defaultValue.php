<?php

function defaultValue($string = null){ //引数に = null(or 値) を指定することで、デフォルト値を設定できる。
  echo $string; . "です";
} 

defaultValue(); //引数なしのこれでも実行できる。ファンクションに引数設定（デフォルト値なし）しているのに、呼び出し時に引数がない場合はエラーが出る。
// 結果：です

defaultValue("テスト"); //これは$stringに”テスト"が入って普通に処理される。
// 結果：テストです

?>