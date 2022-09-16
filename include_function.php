<?php

$text = "text";
$jap_text = "あいうえお";

echo strlen($text);

echo "<br>";

echo strlen($jap_text);

// 日本語はutf-8で1文字あたり3~6バイト使うので、「あいうえお」は15と表記される。
// マルチバイトの関数を使えば、日本語でも１文字と換算してくれる。
echo "<br>";

echo mb_strlen($jap_text);


// 文字列の置換

$str = "文字列を置換します";

echo str_replace("置換","ちかん",$str);
?>