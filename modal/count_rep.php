<?php 
require_once('../database/Connection.php');

// Đếm tổng sô tin nhắn
$sql = 'select * from question where stats= true;';
$result = $conn->query($sql);
$f = mysqli_num_rows($result);
echo $f;

