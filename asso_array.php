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

$array_member_2 = [
  "1kumi" => [
    "本田" => [
      "height" => 170,
      "hobby" => "サッカー"
    ],
    "香川" => [
      "height" => 165,
      "hobby" => "サッカー"
    ]
  ],
  "2kumi" => [
    "長友" => [
      "height" => 160,
      "hobby" => "サッカー"
    ],
    "乾" => [
      "height" => 175,
      "hobby" => "サッカー"
    ]
  ],
];

echo $array_member_2["2kumi"]["長友"]["hobby"];

echo "<pre>";
var_dump($array_member_2);
echo "</pre>";

?>