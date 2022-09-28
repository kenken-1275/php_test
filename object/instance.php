<?php

class Product{

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

$instance->addProduct("追加分");
echo "<br>";

$instance->getProduct();
echo "<br>";

Product::getStaticProduct("静的");
echo "<br>";

?>