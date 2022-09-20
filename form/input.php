<?php 

header("X-FRAME-OPTIONS:DENY");

session_start();

require "validation.php";

// スーパーグローバル変数 phpでは9種類ある。フォームに入力した内容を連想配列にする。またアドレスに入力した内容が反映される。
// method"POST"でも同じように連想配列になるが、アドレスに入力内容が表示されなくなる。パスワードとか表示したくない場合はPOSTが良い。
if(!empty($_POST)){
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// フォームの入力・確認・完了でページを分ける方法。
// ①３つのファイルを用意する。
// ②1つのファイル内に、変数を用意して分岐させる。
$page_flag = 0;
$errors = validation($_POST);

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


if(!empty($_POST["btn_confirm"]) && empty($errors)){
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

  <?php
    if(!empty($errors) && !empty($_POST["btn_confirm"])) : ?>
    <?php echo "<ul>"; ?>
    <?php 
      foreach($errors as $error){
        echo "<li>" . $error . "</li>";
      }
    ?>
    <?php echo "</ul>"; ?>
    <?php endif; ?>
  入力画面
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name" value="<?php if(!empty($_POST["your_name"])){ echo h($_POST["your_name"]);} ?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php if(!empty($_POST["email"])){ echo h($_POST["email"]);} ?>">
    <br>
    ホームページ
    <input type="url" name="url" value="<?php if(!empty($_POST["url"])){ echo h($_POST["url"]);} ?>">
    <br>
    性別
    <input type="radio" name="gender" value="0"
    <?php if(isset($_POST["gender"]) && $_POST["gender"] === "0")
    {echo "checked"; } ?>>男性
    <input type="radio" name="gender" value="1"
    <?php if(isset($_POST["gender"]) && $_POST["gender"] === "1")
    {echo "checked"; } ?>>女性
    <br>
    年齢
    <select name="age">
      <option value="">選択してください</option>
      <option value="1"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "1")
      {echo "selected"; } ?>>〜19歳</option>
      <option value="2"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "2")
      {echo "selected"; } ?>>20歳〜29歳</option>
      <option value="3"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "3")
      {echo "selected"; } ?>>30歳〜39歳</option>
      <option value="4"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "4")
      {echo "selected"; } ?>>40歳〜49歳</option>
      <option value="5"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "5")
      {echo "selected"; } ?>>50歳〜59歳</option>
      <option value="6"
      <?php if(isset($_POST["age"]) && $_POST["age"] === "6")
      {echo "selected"; } ?>>60歳〜</option>
    </select>
    <br>
    お問い合わせ内容
    <textarea name="contact"><?php if(!empty($_POST["contact"])){ echo h($_POST["contact"]);} ?></textarea>
    <br>
    <input type="checkbox" name="caution" value="1">注意事項にチェックする
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
      ホームページ
      <?php echo h($_POST["url"]); ?>
      <br>
      性別
      <?php 
        if($_POST["gender"] === "0"){ echo "男性"; }
        if($_POST["gender"] === "1"){ echo "女性"; }
      ?>
      <br>
      年齢
      <?php
        if($_POST["age"] === "1"){ echo "~19歳";}
        if($_POST["age"] === "2"){ echo "20歳~29歳";}
        if($_POST["age"] === "3"){ echo "30歳~39歳";}
        if($_POST["age"] === "4"){ echo "40歳~49歳";}
        if($_POST["age"] === "5"){ echo "50歳~59歳";}
        if($_POST["age"] === "6"){ echo "60歳~";}
      ?>
      <br>
      お問い合わせ内容
      <?php echo h($_POST["contact"]); ?>
      <br>
      <input type="submit" name= "back" value="戻る">
      <input type="submit" name= "btn_submit" value="送信する">
      <input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]); ?>">
      <input type="hidden" name="email" value="<?php echo h($_POST["email"]); ?>">
      <input type="hidden" name="url" value="<?php echo h($_POST["url"]); ?>">
      <input type="hidden" name="gender" value="<?php echo h($_POST["gender"]); ?>">
      <input type="hidden" name="age" value="<?php echo h($_POST["age"]); ?>">
      <input type="hidden" name="contact" value="<?php echo h($_POST["contact"]); ?>">
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