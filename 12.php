<?php

//1
$name="miyuki";
if ($name="miyuki"){
 echo "私は".$name."です";
} else {
    echo $name."ではありません";
}

//2
for ($i=1; $i<=10000; $i++){
    $total += $i;
}
echo $total;

//3
$fruits=array("orange","apple","cherry","banana","grape");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}