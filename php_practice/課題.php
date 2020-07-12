<?php
//PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう

/*$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。*/
$name = "Keita";

if ($name == "Keita"){
 echo "私はKeitaです";
}else if ($name != "Keita"){
 echo "Keitaではありません";
}

//for文を使って、1から10000までの合計の値を表示してください。
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "grape", "lemon", "melon", "banana");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
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



//PHP/Laravel 04 関数を理解しよう
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($num){
    $result = $num * 2;
    return $result;
    }
echo sum(1000);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    $result = $a + $b;
    return $result;
    }
echo f(10, 200);

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function sum2($arr){
    $result = 1;
    foreach($arr as $number){
    $result *= $number;
    }
    return $result;
}
echo sum2(array(1, 3, 5, 7, 9));
echo "\n";

/*4.【応用】　次のプログラムは、配列の中で1番大きい値を返す 
max_array という関数を実装しようとしています。途中の部分を完成させてください。*/

$arr=array(1, 10, 5, 31);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
       $max_number = $a;
    }
 }

 return $max_number;
 }
 echo max_array($arr);
 echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
 
 //strip_tags   文字列から HTML および PHP タグを取り除く
 $text = '<p>test paragraph.</p><!-- Comment --><a href="#fragment">Other text</a>';
 echo strip_tags($text);
 echo "\n";
 
 echo strip_tags($text, '<p><a>');
 
 //array_push　配列への追加
 $fruits = ['apple','orange','melon'];
 array_push($fruits, 'banana','pineapple');
 
 print_r ($fruits);
 echo "\n";
 
 //array_merge  配列を結合する
 $array1 = [1, 2, 3];
 $array2 = [10, 20, 30];
 $array3 = [100, 200, 300];
 
 $array =array_merge($array1, $array2, $array3);
 
 print_r($array);
 
 //time, mktime  日付を Unix のタイムスタンプとして取得する
 echo '現在のUnixタイムスタンプ:'.time();
 echo '<br>';
 echo "\n";
 
 $nweek = time() + (3 * 24 * 60 * 60);
 echo '3日後のUnixタイムスタンプ:'.$nweek;
 
 $timestamp = mktime(0, 0, 0, 8, 1, 2017);
 echo $timestamp;
 echo "\n";
 
 //date  ローカルの日付/時刻を書式化する
 echo date('Y/m/d');
 echo "\n";
 
 echo date('Y-m-d H:i:s');
 echo "\n";
 
 echo date('Y年m月d日 H時i分s秒');
 echo "\n";
 
 ?>