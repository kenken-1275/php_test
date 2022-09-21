<?php
//パスワードを記録したファイルの場所
// /Applications/MAMP/htdocs/php_test/mainte/basic_certif.php
echo __FILE__;

echo "<br>";

// パスワード暗号化
echo(password_hash("password123",PASSWORD_BCRYPT));
?>