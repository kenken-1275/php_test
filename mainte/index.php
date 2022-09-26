<?php

require "db_connection.php";

//ユーザー入力なし query
// $sql = "select * from contacts where id = 2"; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント

// $result = $stmt->fetchall();

// echo "<pre>";
// var_dump($result);
// echo "</pre>"


//ユーザー入力あり prepare,bind,execute 悪意あるユーザーがdelete *などフォームにsql文を入力された時を想定して（SQLインジェクション）
$sql = "select * from contacts where id = :id"; //名前つきプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue(":id",3,PDO::PARAM_INT); //紐付け（[3]の箇所は実際は入力された値の変数になることが多い）書式）bindValue('プレースホルダ名', '実際にバインドするデータ', 'データの型');
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo "<pre>";
var_dump($result);
echo "</pre>"

?>