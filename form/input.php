<?php 

header("X-FRAME-OPTIONS:DENY");

session_start();

// スーパーグローバル変数 phpでは9種類ある。フォームに入力した内容を連想配列にする。またアドレスに入力した内容が反映される。
// method"POST"でも同じように連想配列になるが、アドレスに入力内容が表示されなくなる。パスワードとか表示したくない場合はPOSTが良い。
if(!empty($_SESSION)){
  echo "<pre>";
  var_dump($_SESSION);
  echo "</pre>";
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// フォームの入力・確認・完了でページを分ける方法。
// ①３つのファイルを用意する。
// ②1つのファイル内に、変数を用意して分岐させる。
$page_flag = 0;

echo "<pre>";
var_dump($_POST);
echo "</pre>";


if(!empty($_POST["btn_confirm"])){
  $page_flag = 1;
}

if(!empty($_POST["btn_submit"])){
  $page_flag = 2;
}


?>


<!DOCTYPE HTML>
<meta charset="utf-8">
<head></head>
<body>

<?php if($page_flag === 0) :?>
  <?php
    if(!isset($_SESSION["csrf_token"])){
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION["csrf_token"] = $csrf_token;
    }
    $token = $_SESSION["csrf_token"];
  ?>
  入力画面
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name" value="<?php if(!empty($_POST["your_name"])){ echo h($_POST["your_name"]);} ?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty($_POST["email"])){ echo h($_POST["email"]);} ?>">
    <br>
    <!-- <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ -->
    <input type="submit" name= "btn_confirm" value="確認する">
    <input type="hidden" name="csrf" value="<?php echo $token; ?>">
  </form>
<?php endif; ?>




<?php if($page_flag === 1) :?>
  <?php if($_POST["csrf"] === $_SESSION["csrf_token"]) : ?>
  確認画面
    <form method="POST" action="input.php">
      氏名
      <?php echo h($_POST["your_name"]); ?>
      <br>
      メールアドレス
      <?php echo h($_POST["email"]); ?>
      <br>
      <input type="submit" name= "back" value="戻る">
      <input type="submit" name= "btn_submit" value="送信する">
      <input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]); ?>">
      <input type="hidden" name="email" value="<?php echo h($_POST["email"]); ?>">
      <input type="hidden" name="csrf" value="<?php echo h($_POST["csrf"]); ?>">
    </form>
  <?php endif; ?>
<?php endif; ?>


<?php if($page_flag === 2) :?>
  <?php if($_POST["csrf"] === $_SESSION["csrf_token"]) : ?>
  送信が完了しました。
  <?php unset($_SESSION["csrf_token"]); ?>
  <?php endif; ?>
<?php endif; ?>


</body>
</html>