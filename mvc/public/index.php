<?php 

if (!isset($_GET['fetched'])) {
	echo 'hello';
	// exit;
} else{
	echo 'no hello';
	exit;
}

require '../config/db.php';
// if (isset($_GET['fetched'])) ? $_GET['fetched'] : '';
$letters = $_GET['fetched'];
// var_dump($letters);die;
$sql = 'select * from comments where content like "'.$letters.'%"';
$res = $db->query($sql);
// $found_cont = [];
// var_dump($res);die;
while($cont = $res->fetch_assoc()){
	echo '<a href="#">'.$cont['content'].'</a>';
	// array_push($found_cont, $cont);
}

$json_cont = json_encode($found_cont);

echo $json_cont;
