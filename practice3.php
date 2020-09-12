<?php


//課題１
function sum1($max)
{
    return  $max * 2 . "\n";
}

echo sum1(4);


//課題２
function sum2($a, $b)
{
    return $a + $b . "\n";
}

echo sum2(2, 5);


//課題３
function multiply_array($arr)
{
    $result = 1;
    foreach ($arr as $a) {
        $result *= $a;
    }
    return $result . "\n";
}

echo multiply_array(array(1, 3, 5 ,7, 9));


//課題４
function max_array($arr)
{
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number . "\n";
}
 
echo max_array(array(1, 3, 5 ,7, 9));


//課題５
//・strip_tags
$text = "<h1>サーモン</h1><p>イクラ</p><strong>ウニ</strong>";
echo $text . "\n";
echo strip_tags($text, '<p>') . "\n";

//・array_push
$members = array("マグロ","イカ","アジ");
array_push($members, "ブリ", "サンマ");
print_r($members);

//・array_merge
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//・time
$time1 = time();
echo $time1 . "\n";

//・mktime, date
echo date("Y年m月d日　H時i分", mktime(0, 0, 0, 1, 1, 2000));
