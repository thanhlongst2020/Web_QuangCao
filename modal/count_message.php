<?php 
require_once('../database/Connection.php');

$sql = 'select * from question';
$result = $conn->query($sql);
$f = mysqli_num_rows($result);
echo $f;