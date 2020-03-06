<?php
$zxc = '123';
$jke = '345';
$qwer = '49';

$a = (false and foo());
$b = (true  or  foo());

echo $jke + $zxc;
echo '<br>';
echo '<br>';
// 1 quest

echo $zxc - $jke;
echo '<br>';
echo '<br>';
// 2 quest

echo $zxc * $jke * $qwer;
echo '<br>';
echo '<br>';
// 3 quest

echo sqrt($qwer);
echo '<br>';
echo '<br>';
// 4 quest

$a = false or true;
$b = true and false;
var_dump($a, $b);
echo '<br>';
// 5 quest

$aNumbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
echo($aNumbers[0]);
echo '<br>';
echo($aNumbers[1]);
echo '<br>';
echo($aNumbers[2]);
echo '<br>';
echo($aNumbers[3]);
echo '<br>';
//6 quest


$bMaq = ['sf' => 'shadow fiend',
             'necr' => 'necrophos'];
             echo $bMaq['sf'];
echo '<br>';
//7 quest

$fio = "Петров Петр Петрович";
$pack = explode(" ", $fio);

echo '<br>';

echo substr($fio,0,13); 
echo substr($fio,0,2); echo "."; echo substr($fio,0,2)
//8 quest


?>