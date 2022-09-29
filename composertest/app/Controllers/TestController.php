<?php

namespace App\Controllers;

use App\Models\TestModel; //TestModelファイルおよびクラスの継承をしている

class TestController{
  public function run(){
    $model = new TestModel; //継承していることでTestModelのインスタンスを作成できる。TestControllerクラス内で、TestModelインスタンスを作成。
    echo $model->getText(); //継承していることでTestModelのgetTextメソッドを使用できる。
  }
}


?>