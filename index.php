<?php 
     require('database/Connection.php');
     require_once('modal/count_visitors.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThanhTung design</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="maque">
            <marquee><span >Liên hệ tư vấn : </span><span ><img src="./assets/location.png"/>273 Mỹ Hội Đông, An Giang</span><span><img src="./assets/phone.png"  />Email : nguyennhithai4620@gmail.com</span><span ><img src="./assets/phone.png"/> 0395996992 ( Mr. Thái)</span><span><img src="./assets/phone.png" />0123456789 (Ms. Diệu Tiên)</span><span><img src="./assets/phone.png" />0123456789 (Mr. Tùng)</span></marquee>
        </div>
        <div style="display:flex">
        <div class="logo" onclick="Home()">
            <img src="https://mir-s3-cdn-cf.behance.net/user/276/bd566661043453.597b8b4c68b4b.jpg" style="display:inline-block"/>
            <p>The Zoom</p>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="./index.php">TRANG CHỦ</a></li>
                <li><a href="./section/service.php">DỊCH VỤ</a> </li>
                <li><a href="./section/contact.php">LIÊN HỆ</a></li>              
                <li><a href="./section/intro.php">GIỚI THIỆU</a></Link></li>
                <li><a href="./section/login.php">ĐĂNG NHẬP</a></li>
            </ul>
        </div>
        </div>
    </header>
    <div class="body-content">
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="./assets/bg2.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="./assets/bg1.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="./assets/bg3.jpg" style="width:100%">
            </div> 
            <p style="font-family: serif">Thiết kế Logo chuyên nghiệp</p>
            <button>Chi tiết</button>     
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div> 
        
        <div class="introduce">
            <div class="introduce-content">
                <h5>GIỚI THIỆU</h5>
                <img src="./assets/line.jpg"/>
                <p>Mở đầu câu chuyện, chúng tôi muốn các bạn hiểu đây không phải một bài viết quảng cáo để chúng tôi tìm kiếm khách hàng hoặc tranh giành khách hàng.Ngày nay thị trường
                    quá rộng để chúng ta đấu đá lẫn nhau, vậy vấn đề chúng tôi muốn nói tới ở đây là gì? Đơn giản chúng tôi chỉ muốn làm những người đam mê nghệ thuật đúng nghĩa.
                </p>
                <span>Xem thêm</span>
            </div>
            <div class="introduce-image">
                <img src="./assets/intro-img.jpg"/>
                <p>Công ty dịch vụ thiết kế bao bì Tùng Xèng</p>
            </div>
        </div>
        <div class="service">
            <p>DỊCH VỤ CỦA CHÚNG TÔI</p>
            <div class="flex-container">
                <div class="item-container">
                    <img src="./assets/item1.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Thiết kế tem, nhãn</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item2.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Bao bì giấy</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item3.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Bao bì màng đơn</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item4.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Bao bì nhựa</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item5.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Decal giấy, nhựa</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item6.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Thiết kế logo</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item7.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Bao bì màng ghép phức hợp</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item8.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Túi giấy</div>
                    </div>
                </div>
                <div class="item-container">
                    <img src="./assets/item9.jpg" class="item-image">
                    <div class="item-overlay">
                      <div class="item-text">Logo nổi</div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="number">
            <div>
                <img src="./assets/avatar.png"/>
                <h1>500 +</h1>
                <p>Sản phẩm</p>
            </div>
            <div>
                <img src="./assets/avatar.png"/>
                <h1>300 +</h1>
                <p>Dự án lớn,nhỏ</p>
            </div>
            <div>
                <img src="./assets/avatar.png"/>
                <h1>7 năm</h1>
                <p>Khinh nghiệm</p>
            </div>
            <div>
                <img src="./assets/avatar.png"/>
                <h1>100%</h1>
                <p>Đánh giá uy tính</p>
            </div>
        </div>
        
        <div class="background-content">

        </div>
    </div>
    <div id="footer">
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
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
</body>
</html>