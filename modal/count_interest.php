<?php 
$ip = $_SERVER['REMOTE_ADDR'];
//Getting IP address
// echo 'Your IP Address is:'. $ip;
//Database connectivity
$sql = 'insert into count_interest(ip_address) values("'.$ip.'"); ';
$result = $conn->query($sql);

// $sql ='select * from count_ip;';
// $result = $conn->query($sql);
// $count = mysqli_num_rows($result);
// echo $count;
?>