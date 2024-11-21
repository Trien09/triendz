<?php
require('../conn.php');
$data = array();
$sql = "SELECT *  FROM `baiviet` ORDER BY id desc";
$result = $connect->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$connect = null;
exit();



