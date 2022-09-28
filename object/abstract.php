<?php
//抽象クラス　設定するメソッドを強制する
abstract class ProductAbstract{
  public function echoProduct(){
    echo "親クラスです。";
  }

   //abstract関数(抽象メソッド)は中身を書けない。
  abstract public function getProduct();
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
class Product extends ProductAbstract{ //抽象メソッドを設定したら、必ず抽象メソッドを使わなければいけない決まりになっている。

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
}

$instance = new Product("テスト");

var_dump($instance);

$instance->getProduct();
echo "<br>";

//インスタンスはProductクラスで作成しているが、継承しているので、親クラスであるBaseProductの関数を実行できる。
$instance->echoProduct();
echo "<br>";

$instance->addProduct("追加分");
echo "<br>";

$instance->getProduct();
echo "<br>";

Product::getStaticProduct("静的");
echo "<br>";

?>