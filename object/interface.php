<?php

ini_set("display_errors","1");
error_reporting(E_ALL);


//インターフェイス　メソッド名の定義しかできない。（中身を書いてはいけない）子クラスで必ず呼び出して、そこで中身（処理）を記述する。
interface ProductInterface{
  // public function echoProduct(){
  //   echo "親クラスです。";
  // }

  public function getProduct();
}

//インターフェイス　メソッド名の定義しかできない。（中身を書いてはいけない）子クラスで必ず呼び出して、そこで中身（処理）を記述する。
interface NewsInterface{
  // public function echoProduct(){
  //   echo "親クラスです。";
  // }

  public function getNews();
}

//具象クラス
class BaseProduct{
  public function echoProduct(){
    echo "親クラスです。";
  }

  //オーバーライド（上書き）
  public function getProduct(){ 
    echo "親の関数です";
  }
}
//子クラス
class Product implements ProductInterface,NewsInterface{ //インターフェイスは、複数の継承ができる。（クラスの継承は１つしかできないが）

  //アクセス修飾子 private(外からアクセスできない),public(公開),protected(自分と継承したクラスのみ使える)

  private $product =[];

  function __construct($product){
    $this->product = $product;
  }

  public function getProduct(){
    echo $this->product;
  }

  public function addProduct($item){
    $this->product .= $item;
  }

  public static function getStaticProduct($str){
    echo $str;
  }

  // インターフェースを追加したので、実行する必要が出てくる。親クラスには内容は記載できないので、ここで記述する必要がある。
  public function getNews(){
    echo "ニュースです。";
  }
}

$instance = new Product("テスト");

var_dump($instance);

$instance->getProduct();
echo "<br>";

//インスタンスはProductクラスで作成しているが、継承しているので、親クラスであるBaseProductの関数を実行できる。
// $instance->echoProduct();
// echo "<br>";

$instance->addProduct("追加分");
echo "<br>";

$instance->getProduct();
echo "<br>";

// ここで関数呼び出し。呼び出さなくてもエラーは出ない。
$instance->getNews();
echo "<br>";

Product::getStaticProduct("静的");
echo "<br>";

?>