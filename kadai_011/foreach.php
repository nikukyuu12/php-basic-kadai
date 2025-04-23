<?php

//連想配列に変数を代入

$products = [
  '野菜' => '玉ねぎ',
  '値段' => 200,
  '産地' =>'北海道'
  ];

  //連想配列の キーと値を 1つずつ順番に出力

    foreach($products as $key => $value) {
    echo "{$key} : {$value} <br>";
    }

    ?>