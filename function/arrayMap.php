<?php

$parameters = ["  空白あり　"," 配列 ", " 空白あり  "];

echo "<pre>";
var_dump($parameters); //空白ありで出力される。
echo "</pre>";


$trimedParameters = array_map("trim",$parameters); //trimは空白を探して削除してくれる関数、関数をそのまま引数にすることもできる（コールバック関数）。のちの引数の配列の値それぞれに適用される。

echo "<pre>";
var_dump($trimedParameters); //空白が削除されて出力される。
echo "</pre>";



?>