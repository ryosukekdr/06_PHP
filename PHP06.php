<?php

function double($a){
    $a=$a*2;
    return $a;
}
$x = 10;
echo double($x);
echo "\n";



 function add($a, $b){
    $c=$a+$b;
    return $c;
 }
 $x = 11;
 $y = 22;
 echo add($x, $y);
 echo "\n";
 
 
 
 function multi($arr){
     $multi = 1;
     foreach($arr as $a){
         $multi = $multi * $a;
     }
     return $multi;
 }
 $array = array(1, 3, 5 ,7, 9);
 echo multi($array);
 echo "\n";
 
 
 
 function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($a > $max_number){
        $max_number = $a;
    }
  }

  return $max_number;
}

echo max_array($array);
