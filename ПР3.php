<?php
	$arr = ['a', 'b', 'c'];
	print_r(count($arr));
	echo '<br>';echo '<br>';
	
	$arr = ['a', 'b', 'c'];
	echo $arr[count($arr)-1];
	echo '<br>';echo '<br>';
//quest 1 end

	$a = [1, 2, 3];
	if (in_array(3, $arr)){
		echo "Yes";
	}
	else{
		echo "No";
	}
	echo '<br>';echo '<br>';
//quest 2 end

	$a = [4, 6, 10];
	echo "sum = ".array_sum($a);
	echo '<br>';echo '<br>';

	$a = [4, 6, 10];
	echo "product = ".array_product($a);
	echo '<br>';
	echo '<br>';
	
	$arr = [4, 6, 5];
	echo array_sum($arr)/count($arr);
	echo '<br>';echo '<br>';
//quest 3 end

	$a = range(1, 100);
	var_dump($a);
	echo '<br>';echo '<br>';
	
	$a = range("a", "z");
	var_dump($a);
	echo '<br>';echo '<br>';
	

	$a = range(1, 9);
	echo implode("-", $a);
	echo '<br>';echo '<br>';
	
	$a = range(1, 100);
	echo array_sum($a);
	echo '<br>';echo '<br>';
	
	$a = range(1, 10);
	echo array_product($a);
	echo '<br>';echo '<br>';
//quest 4 end

	$a1 = [1, 2, 3];
	$a2 = ['a', 'b', 'c'];
	$result = array_merge($a1, $a2);
	var_dump($result);
	echo '<br>';echo '<br>';
	
//quest 5 end
	$a = [1, 2, 3, 4, 5];
	var_dump(array_slice($a, 1, 3));
	echo '<br>';echo '<br>';

//quest 6 end
	$a = [1, 2, 3, 4, 5];
	array_splice($a, 1, 2);
	var_dump($a);
	echo '<br>';echo '<br>';
	
	$a = [1, 2, 3, 4, 5];
	var_dump(array_splice($a, 1, 3));
	echo '<br>';echo '<br>';
	
	$a = [1, 2, 3, 4, 5];
	array_splice($a, 3, 0, ['a', 'b', 'c']);
	var_dump($a);
	echo '<br>';echo '<br>';

	$a =[1, 2, 3, 4, 5];
	array_splice($a, 1, 0,   ['a', 'b']);
	array_splice($a, 4, 0,   ['c']);
	array_splice($a, 5, 0,   ['e']);
	var_dump($a);
	echo '<br>';echo '<br>';
//quest 7 end

	$a = ['a'=>1, 'b'=>2, 'c'=>3];
	$keys = array_keys($a);
	$values = array_values($a);
	var_dump($keys);
	var_dump($values);
	echo '<br>';echo '<br>';

	$a1 = ['a', 'b', 'c'];
	$a2 = [1, 2, 3];
	$result = array_combine($a1, $a2);
	var_dump($result);
	echo '<br>';echo '<br>';
//quest 8 end

	$a = ['a'=>1, 'b'=>2, 'c'=>3];
	var_dump(array_flip($a));
	echo '<br>';echo '<br>';

	$a = [1, 2, 3, 4, 5];
	var_dump(array_reverse($a));
	echo '<br>';echo '<br>';
	
//quest 9 end
	$a = ['a','-','b','-','c','-','d'];
	var_dump(array_search('-', $a));
	echo '<br>';echo '<br>';

	$a = ['a','-','b','-','c','-','d'];
	$a_s = array_search('-', $a);
	array_splice($a, $a_s, 1);
	var_dump($a);
	echo '<br>';echo '<br>';
	
//quest 10 end
	$a = ['3'=>'a','1'=>'c', '2'=>'e','4'=>'b'];
	var_dump(array_replace($a, [0=>'!',3=>'!!']));
	echo '<br>';echo '<br>';
	
//quest 11 end
	$a = ['3'=>'a','1'=>'c', '2'=>'e','4'=>'b'];
	var_dump(asort($a));echo '<br>';
	var_dump(arsort($a));echo '<br>';
	var_dump(ksort($a));echo '<br>';
	var_dump(krsort($a));echo '<br>';
	var_dump(sort($a));echo '<br>';echo '<br>';
	
//quest 12 end
	$a = ['a'=>1,'b'=>2, 'c'=>3];
	var_dump(array_rand($a));
	echo '<br>';echo '<br>';

	$a = ['a'=>1,'b'=>2, 'c'=>3];
	echo $a[array_rand($a)];
	echo '<br>';echo '<br>';
	
//quest 13 end
	$a = [1, 2, 3, 4, 5];
	var_dump(shuffle($a));
	echo '<br>';echo '<br>';
	
	$a = range(1, 25);
	var_dump(shuffle($a));
	echo '<br>';echo '<br>';
	
	$a = range('a', 'z');
	var_dump(shuffle($a));
	echo '<br>';echo '<br>';
	
	echo substr((str_shuffle('abcdefghijklmnopqrstuvwxyz')), 0,6);
	echo '<br>';echo '<br>';
	
//quest 14 end
	$a = ['a', 'b', 'c', 'b', 'a'];
	var_dump(array_unique($a));
	echo '<br>';echo '<br>';
	
//quest 15 end
	$a = [1, 2, 3, 4, 5];
	echo $element1 = array_shift($a);
	echo $element2 = array_pop($a);
	var_dump($element1, $element2);
	echo '<br>';
	var_dump($a);
	echo '<br>';echo '<br>';

	$a = [1, 2, 3, 4, 5];
	$elem1 = array_unshift($a, 0);
	$elem2 = array_push($a, 6);
	var_dump($a);
	echo '<br>';echo '<br>';

	$a = [1, 2, 3, 4, 5, 6, 7, 8];
	$str = '';
	while (count($a) > 0){
		$str .= array_shift($a);
		$str .= array_pop($a);
	}
	echo ($str);
	echo '<br>';echo '<br>';
	
//quest 16 end
	$a = ['a', 'b', 'c'];
	var_dump(array_pad($a, 6, '-'));
	echo '<br>';echo '<br>';

	$a = [];
	var_dump(array_pad($a, 10, 'x'));
	echo '<br>';echo '<br>';

	$a = range(1, 20);
	var_dump(array_chunk($a, 4));
	echo '<br>';echo '<br>';
	
//quest 17 end
	$a = ['a', 'b', 'c', 'b', 'a'];
	var_dump(array_count_values($a));
	echo '<br>';echo '<br>';
	
//quest 18 end
	$a = [1, 2, 3, 4, 5];
	var_dump(array_map('sqrt', $a));
	echo '<br>';echo '<br>';

	$a = ['<b>php</b>', '<b>html</b>'];
	var_dump(array_map('strip_tags', $a));
	echo '<br>';echo '<br>';

	$a = ['a', 'b', 'c'];
	var_dump(array_map('trim', $a));
	echo '<br>';echo '<br>';
	
//quest 19 end
	$a1 = [1, 2, 3, 4, 5];
	$a2 = [3, 4, 5, 6, 7];
	var_dump(array_intersect($a1, $a2));
	echo '<br>';echo '<br>';
	
	$a1 = [1, 2, 3, 4, 5];
	$a2 = [3, 4, 5, 6, 7];
	$res1 = array_diff($a1, $a2);
	$res2 = array_diff($a2, $a1);
	var_dump(array_merge($res1, $res2));
// quest 20 end
?>