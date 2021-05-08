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
    <!-- <div id="footer">
        <footer class="footer-distributed">       
                <div class="footer-left">    
                    <img src="https://mir-s3-cdn-cf.behance.net/user/276/bd566661043453.597b8b4c68b4b.jpg" style="width:130px; border:2px solid black"/>   
                    <h3>Thai zoom<span>Cop</span></h3>  
                    <p class="footer-links">
                        <a href="#">Home</a>                            
                        <a href="#">Blog</a>                      
                        <a href="#">Pricing</a>                       
                        <a href="#">About</a>                           
                        <a href="#">Faq</a>                           
                        <a href="#">Contact</a>
                    </p>        
                    <p class="footer-company-name">Design By Zoom Company © 2015</p>
                </div>       
                <div class="footer-center">       
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>123 3/2 street</span> Ninh Kiều, Cần Thơ</p>
                    </div>        
                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+84 0395996992</p>
                    </div>        
                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@company.com">nguyennhithai4620@gmail.com</a></p>
                    </div>       
                </div>       
                <div class="footer-right">        
                    <p class="footer-company-about">
                        <span>About the company</span>
                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>        
                    <div class="footer-icons">      
                        <a href="https://www.facebook.com/profile.php?id=100012416316231" target="_blank"><img src="./assets/facebook-square-brands.svg"></img></a>
                        <a href="https://github.com/nhithai4620" target="_blank"><img src="./assets/github-square-brands.svg"></img></a>
                        <a href="https://www.instagram.com/nhithai46200/?fbclid=IwAR16w1ZijZZnIhMe7xTJQZnGbHsVgWSetx59cahfMvdkIJxMFmFiFSAdmB8" target="_blank"><img src="./assets/instagram-square-brands.svg"></img></a>
                        <a href="https://www.linkedin.com/in/nh%C4%A9-th%C3%A1i-nguy%E1%BB%85n-3997191b8/" target="_blank"><img src="./assets/linkedin-brands.svg"></img></a>      
                    </div>
                </div>
        </footer>
    </div> -->
    <?php require_once('footer.php') ?>
    
</body>
</html>