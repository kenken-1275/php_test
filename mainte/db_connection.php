<?php

const DB_HOST = "mysql:dbname=udemy_php;host=localhost;charset=utf8";
const DB_USER = "php_user2";
const DB_PASSWORD = "";

// 例外処理 Exception
try{
  $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD,[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 連想配列で取得
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //例外を表示する
    PDO::ATTR_EMULATE_PREPARES => false, //SQLインジェクション対策
  ]);
  echo "接続成功";
} catch(PDOException $e){
  echo "接続失敗" . $e->getMessage() . "\n";
  exit();
}

?>