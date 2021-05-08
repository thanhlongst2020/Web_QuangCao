<?php
require_once('../../database/Connection.php');

    if(isset($_POST['id_xoa'])){
        $id_xoa = $_POST['id_xoa'];
        echo $id_xoa;
        $sql = 'delete from question where id ='.$id_xoa.'';
        $result = $conn->query($sql);
        if($result){
            echo 1;
        }
        else{
            echo 0;
        }
    }
    

?>