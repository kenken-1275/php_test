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

// トランザクション まとまった処理 beginTransaction,commit,rollbackという３つのメソッドを使う。
// ex)銀行 残高を確認->Aさんから引き落とし->Bさんに振り込み　１つでも欠けるとまずいので、何か問題があれば最初に戻る(1連の処理と捉える)。これもtry{}catch(){}を使う。
// catchの後ろは、ほぼ定型文

$pdo->beginTransaction(); //トランザクションの開始

try{
  // sql処理
  $stmt = $pdo->prepare($sql); //プリペアードステートメント
  $stmt->bindValue(":id",3,PDO::PARAM_INT); //紐付け
  $stmt->execute(); //実行
  
  $pdo->commit(); //まとめて実行
}catch(PDOException $e){
  $pdo->rollback(); //更新のキャンセル、PDOExceptionで例外が発生したら、rollbackで処理を巻き戻す。
}

?>