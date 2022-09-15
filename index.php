<!DOCTYPE html>

<head></head>

<body>

<!-- コメントです。 -->
こちらはHTMLです。
<br>
<?php 
  echo ("こちらはPHPです。");

  echo "<br>";

  echo "PHP";

  echo "<br>";

  echo 123;

  echo "<br>";
// 先頭は英字か_ならOK、数字はだめ
  $test = 123;
  $test2 = "テスト";
  $test3 = 456;
  $test4 = $test . $test3;

  // 数字同士だが、ピリオドで結合した場合は、文字列として認識される。
  var_dump($test4);
  echo "<br>";

  var_dump($test2);
  echo "<br>";

  echo $test2;

  // echo $test;

?>

</body>
</html>