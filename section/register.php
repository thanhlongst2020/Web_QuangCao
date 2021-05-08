<?php
    require_once('../database/Connection.php');
    require_once('../modal/create_register.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php require_once('header.php')?>
    <div style="display:flex ; justify-content: center;">
    <div class="login">
        <h1>Register</h1>
        <?php 
            if(isset($_GET['error_usr'])){
                echo '<div style="text-align: center; padding: 5px; margin:0 15px; color: lightcoral; border: 2px solid #e56565;">
                        Tài khoản <b>'.$_GET['error_usr'].'</b> đã tồn tại
                    </div>';
            }
        ?>
        <form  method="POST">
        <div class="txt_field">
                <input class="account" type="text" name="fullname" id="fullname" required />
                <span></span>
                <label>Full name</label>
            </div>
            <div class="txt_field">
                <input class="account" type="text" name="username" id="username" required />
                <span></span>
                <label>
                   User name
                </label>
            </div>
            <div class="txt_field"> 
                <input type="password" name="password" id="password" required />
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" key="submit" id="btn_insert"/>
            <div class="signup_link">
                Accept all law in our webpage
            </div>
        </form>
    </div>
    </div>
    <?php require_once('footer.php') ?>
    
</body>
</html>