<?php
    // require_once('../database/Connection.php');
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    if(isset($_POST ['fullname']) &&isset($_POST ['username']) && isset($_POST['password'])){
        $fullname = $_POST ['fullname'];
        $username = $_POST['username'];
        $password= $_POST['password'];
        // Insert dữ liệu vào MySQL
        $stmt = $conn->PREPARE("insert into account(fullname,username,passwrd) values(?,?,?);");
        $stmt->BIND_PARAM('sss',$fullname,$username, $password);

        // set PARAMETERS AND execute
        if(!$stmt->execute()){
            header('Location: register.php?error_usr='.$username.'');
        }
        else{
            //Hiển thị thông báo tạo tài khoản thành cô
            //Chuyển về trang login
            header('Location: login.php?new_account="new"');
            
            
        }
        $stmt->close();
    }
?>