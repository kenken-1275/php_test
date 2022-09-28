<?php
//親クラス
class BaseProduct{
  public function echoProduct(){
    echo "親クラスです。";
  }

  //オーバーライド（上書き）
  public function getProduct(){ //子クラスにも同名の関数がある。同名の場合、子クラスの内容に上書きされる。(子クラスが優先される)
    echo "親の関数です";
  }
}
//子クラス
class Product extends BaseProduct{ //extends 親クラス名　　で継承できる

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