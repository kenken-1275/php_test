<?php 

require __DIR__ . "/common/common.php";

// ディレクトリの場所を絶対パスで表示できる。(マジック定数)
echo __DIR__;

echo "<br>";

// ファイルの場所を絶対パスで表示できる。(マジック定数)
echo __FILE__;

echo "<br>";

echo $common_variable;

echo "<br>";

common_test();

?>