<?php
require('../conn.php');
$id = $_POST['id'];
$_username = $_POST['username'];
$post = $_POST['post'];
$msg = $_POST['msg'];
if($_username != "" && $msg != ""){
	$sql = $connect->query("INSERT INTO baiviet (id, parent_comment, username, post, date)
			VALUES ('$id', '$_username', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$connect = null;

?>
