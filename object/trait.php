<?php
// トレイトは複数の継承ができる。(classの継承は単一継承のため１つしか継承できない。)
trait ProductTrait{
  public function getProduct(){
    echo "プロダクト";
  }
}

trait NewsTrait{
  public function getNews(){
    echo "ニュース";
  }
}

class Product{
  // use trait名　で複数のトレイト(クラス)を継承できる。
  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo "クラスです";
  }
  // オーバーライドも可能
  public function getNews(){
    echo "クラスのニュースです";
  }
}

$product = new Product();
$product->getInformation();
echo "<br>";
$product->getProduct(); //class内には該当メソッドは存在しないが、 use trait名の記述があるので、そのまま呼び出せる。
echo "<br>";
$product->getNews();//class内には該当メソッドは存在しないが、 use trait名の記述があるので、そのまま呼び出せる。
echo "<br>";
?>