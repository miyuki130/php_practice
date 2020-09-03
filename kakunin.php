<?php

//1 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。
function nibai($a){
    $a = $a*2;
    return $a;
}
echo nibai(3);
echo "\n";


//2 $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    $total = 0;
    $total = $a+$b;
    return $total;
 }
 echo f(3,5);
 echo "\n";


//3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
$arr = array(1,3,5,7,9);
function kansuu($arr){
    $result = 1;
    foreach ($arr as $x){
        $result *= $x;
    }
    return $result;
}
    echo kansuu($arr);
    echo "\n";

//4 配列の中で1番大きい値を返す max_array という関数を実装
$arr = array(1,5,9,12);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number<$a){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array($arr);
 echo "\n";

//5
//strip_tags

//array_push

//array_merge

//time, mktime
//time:現在時刻のUNIXタイムスタンプを取得
//mktime:指定した日時のUNIXタイムスタンプを取得
//タイムスタンプは1970年1月1日00:00:00 GMTから指定した時間までの秒を取得
echo time();
echo "\n";

date_default_timezone_set('Asia/Tokyo');
$time = mktime(0,0,0,1,1,2020);
print date("Y/m/d h:i:s",$time);
echo "\n";

//date 引数に指定されたフォーマットを元に、日付文字列を返す関数

//タイムゾーンを指定
date_default_timezone_set('Asia/Tokyo');
e
date_default_timezone_set('Asia/Tokyo');
ech　

