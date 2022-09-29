<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\TestController; //TestControllerファイルおよびクラスの継承をしている。 

$app = new TestController; //TestControllerを継承していることで、インスタンスを作成できる。
$app->run(); //TestControllerを継承していることで、メソッドも使用できる。

//上記の流れとしては、TestControllerインスタンスを作成して、その中のrunメソッドを実行。
// runメソッドの内容は、TestModelインスタンスを生成して、その中のgetTextメソッドを実行してechoすること。
// TestModelインスタンス生成時に、$textプロパティに、"Hello World"という文字列が入る。
// getTextメソッドで、return $this->textを指定しているので、戻り値が上記プロパティとなる。
// runメソッドのechoによって、上記プロパティが出力される。


?>