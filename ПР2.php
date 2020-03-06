<?php
echo strtoupper ('php');
echo '<br>';
echo strtolower ('PHP');
echo '<br>';
echo ucfirst (strtolower ('london'));
echo '<br>';
echo strtolower ('London');
echo '<br>';
echo ucwords (strtolower ('london is the capital of great britain'));
echo '<br>';
echo ucfirst (strtolower ('LONDON'));
echo '<br>';
echo '<br>';
// 1 задание

echo strlen ('html css php');
echo '<br>';

$password = '12312312';
if (strlen($password) >5 && strlen ($password) <10)
{
    echo 'Пароль подходит';
    } else {
    echo 'Пароль не подходит';
    }

    
echo '<br>';
echo '<br>';

// 2 задание

$arr =  substr ('html css php',0,4);
$arr2 =  substr ('html css php',5,7);
print_r ($arr2);
echo '<br>';
echo substr ('dead',-3,3);
echo '<br>';
$str =  'http:dead';
if (substr($str,0,7) =='http://') {
    echo 'да';
    } else {
        echo 'нет';
    }
echo '<br>';
echo 'ddddddddddddddddd';

$str = 'dead.png';
echo substr($str,0,7);
if (substr($str,0,7) =='png') {
    echo 'да';
    } else {
    echo 'нет';
    }
echo '<br>';
$str = 'dead.jpg';
if (substr($str,0,7) =='jpg') 
    {
    echo 'да';
    } else {
    echo 'нет';
    }
echo '<br>';
$str = 'mainstr';
if (strlen($str) > 5) {
    echo substr($str,0,5);
    } else {
    echo $str;
    }
echo '<br>';

// 3 задание

$str = '31.12.2013';
echo str_replace ('.','-',$str) ;
echo '<br>';
$str = 'abbccc';
$str = str_replace ('a',1,$str) ;
$str = str_replace ('b',2,$str) ;
$str = str_replace ('c',3,$str) ;
echo $str;
echo '<br>';

// 4 задание

$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace ([1,2,3,4,5,6,7,8,9,0],'',$str) ;
echo '<br>';
$str = '1a2b3bd';
echo strtr ($str, [1=>'a',2=>'b',3=>'c'])."<br />";
$str = strtr($str,1,'a');
$str = strtr($str,2,'b');
$str = strtr($str,3,'c');
echo '<br>';

// 5 задание

$str = 'AgdDASDsadgr';
echo substr_replace ($str,'!!!',2,5);
echo '<br>';

//6 задание

$str = 'abc abc abc';
echo strpos ($str,'b');
echo '<br>';
$str = 'abc abc abc';
echo strrpos ($str,'b');
echo '<br>';
$str = 'abc abc abc';
echo strpos ($str,'b',3);
echo '<br>';
$str = 'aaa aaa aaa aaa aaa';
echo strpos ($str,' ',4);
echo '<br>';
$str = 'aaa aaa..aaa aaa aaa';
$dots = '..';
$pos = strpos ($str, $dots);
if ($pos == true){
    echo 'есть';
    } else {
    echo 'нет';
    }
echo '<br>';
$str = 'http://zdassewsfcxxx';
if (strpos($str,'http://') !== false){
    echo 'да';
    } else {
    echo 'нет';
    }
echo '<br>';

//7 задание

$str = 'html css php';
$arr = explode(" ",$str);
var_dump($arr);
echo '<br>';



$zxcc = array('html', 'css', 'php');
$razzz = implode(",", $zxcc);
echo $razzz;
echo '<br>';

$date = '2013-12-31';
echo str_replace ('-','.',$date);
?>