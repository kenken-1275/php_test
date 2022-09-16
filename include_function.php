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

// 文字列の分割
$str_2 = "文字列を、分割します";
echo "<pre>";
var_dump(explode("、",$str_2));
echo "</pre>";

// 正規表現

$str_3 = "特定の文字列が含まれるか確認する";

echo preg_match("/文字列/",$str_3);

echo "<br>";

// 指定文字列から文字列を取得する

echo substr("abcde", 2);

echo "<br>";

echo mb_substr("あいうえお",2);
?>