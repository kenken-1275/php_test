<?php 
// 連想配列　キーとバリュー（Rubyでいうハッシュ）
$array_member = [
  "name" => "佐藤",
  "height" => 170,
  "hobby" => "サッカー"
];

echo $array_member["hobby"];

echo "<pre>";
var_dump($array_member);
echo "</pre>";
?>