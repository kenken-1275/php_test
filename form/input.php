<?php 

// スーパーグローバル変数 phpでは9種類ある。フォームに入力した内容を連想配列にする。またアドレスに入力した内容が反映される。
// method"POST"でも同じように連想配列になるが、アドレスに入力内容が表示されなくなる。パスワードとか表示したくない場合はPOSTが良い。
if(!empty($_GET)){
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";
}

?>


<!DOCTYPE HTML>
<meta charset="utf-8">
<head></head>
<body>

<form method="GET" action="input.php">
  氏名
  <input type="text" name="your_name">
  <br>
  <input type="checkbox" name="sports[]" value="野球">野球
  <input type="checkbox" name="sports[]" value="サッカー">サッカー
  <input type="checkbox" name="sports[]" value="バスケ">バスケ

  <input type="submit" value="送信">
</form>


</body>
</html>