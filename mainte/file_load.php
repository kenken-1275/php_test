<?php

$contact_file = ".contact.dat";

// ファイル丸ごと読み込み
$file_contents = file_get_contents($contact_file);

// echo $file_contents;

// ファイルに書き込み(上書き)
// file_put_contents($contact_file,"テストです。");

// ファイルに書き込み(追記、このままでは改行されない)
// file_put_contents($contact_file,"テストです。", FILE_APPEND);

// ファイルに書き込み(追記、改行するには)
// $add_text = "テストです" . "\n";
// file_put_contents($contact_file,$add_text, FILE_APPEND);

// 配列 file ","で区切る explode,foreachを使う
$all_data = file($contact_file);

foreach($all_data as $line_data){
  $lines = explode(",",$line_data);
  echo $lines[0] . "<br>";
  echo $lines[1] . "<br>";
  echo $lines[2] . "<br>";
}
?>