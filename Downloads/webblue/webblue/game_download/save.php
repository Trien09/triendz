<?php
include 'conn.php';
$id = $_POST['id'];
$_username = $_POST['username'];
$msg = $_POST['msg'];
if($_username != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO baiviet (parent_comment, username, post)
			VALUES ('$id', '$_username', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>
