<?php

//クラスFood
class Food {
  //プロパティの定義
  private $name;
  private $price;


//メソッドの定義
public function show_price() {
  echo $this->price;
}

//コンストラクタの作成
public function __construct(string $name, int $price) {
  $this->name =$name;
  $this->price =$price;
  }
}

//クラスAnimal
class Animal {
  //プロパティの定義
  private $name;
  private $height;
  private $weight;
  
  //メソッドの定義
  public function show_height() {
    echo $this->height;
  }

  //コンストラクタの作成
  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}


//インスタンス化する (Food)
$vegetable = new Food('ポテト', 250);
//インスタンス化する(Animal)
$dog = new Animal('犬',60,5000);

//インスタンスの出力実行(Food)
print_r($vegetable);

//改行
echo '<br>';

//インスタンスの出力実行
print_r($dog);


//改行
echo '<br>';
//メソッドへのアクセス
$vegetable->show_price();


//改行
echo '<br>';
//メソッドへのアクセス
$dog->show_height();


?>