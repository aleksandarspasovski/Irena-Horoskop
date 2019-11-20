<?php 
// 1 zadatak
// $nums = array(123, 45, 7, 10);
// $num_r = [];

// foreach ($nums as $num) {
// 	$numb = substr($num, -2, -1);
// 	array_push($num_r, intval($numb));
	
// };

// var_dump(array_sum($num_r));

// 2 zadatak
$primer = 'beograd';
$pr = '';
$primer = strlen($primer);
for ($i=2; $i < $primer; $i+2) { 
	$pr = substr($primer, $i, 4);
}
echo $pr;
// $primer = str_split($primer);
// foreach ($primer as $prim) {
// 	$pr = str_replace($prim, '', '');
// 	var_dump($pr);
// }


// var_dump($primer);



// 3 zadatak

// $arr = array(
// 	array(1, 2 ,3),
// 	array(4, 5 ,6),
// 	array(7, 8 ,9)
// );

// var_dump($arr);