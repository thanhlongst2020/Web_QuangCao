<?php 
    require('../database/Connection.php');
    require('../modal/count_interest.php');
?>
<?php 
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    if(isset($_GET['new_account'])){
        phpAlert("Successfully\\n\\nTạo tài khoản thành công");
    }
?>

<?php
    require_once('../database/Connection.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password= $_POST['password'];
        // Lấy dữ liệu từ MySQL
        $sql = 'select * from account where username="'.$username.'" and passwrd="'.$password.'";';
        $result = $conn->query($sql);
        // Kiểm tra username vs password

        if($result->num_rows){
            header('Location: admin.php?username='.$username.'&password='.$password);          
        }
        else{
            $error = 'Sai tài khoản hoặc mật khẩu';
            header('Location: login.php?error='.$error);  
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php require_once('header.php') ?>
    <div style="display:flex ; justify-content: center;">
    <div class="login">
        <h1>Login</h1>
        <?php 
            if(isset($_GET['error'])){
                echo '<div style="text-align: center; padding: 5px; margin:0 15px; color: lightcoral; border: 2px solid #e56565;">
                        <b>'.$_GET['error'].'</b> 
                    </div>';
            }
        ?>
        <form action="login.php" method="POST">
            <div class="txt_field">
                <input class="account" type="text" name="username" required />
                <span></span>
                <label>User name</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required />
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot password?</div>
            <input type="submit" key="submit"/>
            <div class="signup_link">
                Not a member ? <Link to="/signup"><a href="register.php"> Sign up</a></Link>
            </div>
        </form>
    </div>
    </div>
    <?php require_once('footer.php') ?>
</body>
</html>