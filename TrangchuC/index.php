<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<script src ="../JavaScript/index.js"></script>
<?php
    include_once("../control/Control.php");
    $control = new control();
    $result=$control->lay_dmlp();
?>
<head>
<script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lề Đường Luxury</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css" type="text/css">

</head>


<header>

<div class="BB">   
<div class="B"></div>
</div>
<nav class="taskbar">
<!--<a class ="Logotask"></a> -->

    <a title="" href="index.php">Trang chủ</a>  
    <a title="" href="Danhmucphong.php">Danh mục các phòng</a>  
    <a title="" href="Dichvu.php">Dịch vụ</a>
    <a title="" href="#sales">Các ưu đãi</a>
    <a title="" href="#about">Liên hệ</a>
    <a title="" href="#about">Về chúng tôi</a>
    <a title="Đăng nhập" class="active" href="../Trangchu/Dangnhap.php">Đăng nhập</a>
    <div class ="animation start-home"></div>
    <div class="search-container">
        <form action="timkiem.php" method="POST">
        <input  class = "SearchFont" type="text" placeholder="Tìm kiếm..." name="search">
        <button title="Tìm kiếm" type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
        
</nav>
</header>

<body>


<div class="maincontent">

    <div class ="slide1"> 
      <div class ="slide2">
        <div class ="slides"> 
            <input type ="radio" name="radio-btn" id="radio1">
            <input type ="radio" name="radio-btn" id="radio2">
            <input type ="radio" name="radio-btn" id="radio3">
            <input type ="radio" name="radio-btn" id="radio4">
            <input type ="radio" name="radio-btn" id="radio5">

            <div class ="slide first">
                <img src="../Images/phongtw503.png" alt ="">
            </div>
            <div class ="slide">
                <img src="../Images/phong5.png" alt ="">
            </div>
            <div class ="slide">
                <img src="../Images/phong4.png" alt ="">
            </div>
            <div class ="slide">
                <img src="../Images/phongtw504.png" alt ="">
            </div>
            <div class ="slide">
                <img src="../Images/phongdex103.png" alt ="">
            </div>

            <div class="imgauto">
                <div class="auto1"></div>
                <div class="auto2"></div>
                <div class="auto3"></div>
                <div class="auto4"></div>
                <div class="auto5"></div>
                
            </div>
        </div>
    <div div class ="nav-ma">
    <label for="radio1" class="ma-btn"></label>
    <label for="radio2" class="ma-btn"></label>
    <label for="radio3" class="ma-btn"></label>
    <label for="radio4" class="ma-btn"></label>
    <label for="radio5" class="ma-btn"></label>
    </div>
        </div>
    </div>
</div>


    <div class="content">
    <div class="zap">         
        <div class="center-1">
        <div class="img">
            <img src="../Images/Voucher.png" alt="" height="450px" width="600px">
        </div>
                <div class="ideal-1">
                   Business Center cung cấp dịch vụ mở rộng bao gồm thiết bị liên lạc mới nhất, đường truyền internet tốc độc cao <br>
                   The Rex Business Center provides comprehensive services that include the latest telecommunication equipment, high-speed & wireless internet access, dịch vụ fax và hỗ trợ khách hàng.
                </div>
                
        </div>
      
       

                 
            
        
        <div class="center-2">
                
                <div class="img-1">
                    <img src="../Images/vocher2.png" alt="" height="450px" width="600px"> 
                </div>
                <div class="ideal-2">
                    Dịch vụ dành cho em bé
                    Rex Hotel Saigon cung cấp dịch vụ cho trẻ nhằm đem lại sự tiện lợi cho khách hàng.
                    Khách hàng cân thông báo trước 2 tiếng để mọi sự chuẩn bị được chu đáo. Hơn nữa, các dịch vụ khác, chẳng hạn như giường em bé, gối, và giường phụ cũng có sẵn.
                </div>
        </div>
    </div>

    </div>

    <div class="footer">
        <img class ="imgft" src="../Images/Logo.png" alt="" height="500px" width="700x">
        <div class="FontFooter">
        <div class="diachi"> Sài Gòn - điểm đến khách sạn hấp dẫn và thân thiện luôn rộng mở chào đón Quý khách thập phương. Khách sạn luxury cùng đội ngũ nhân viên chuyên nghiệp, nhiệt tình luôn sẵn sàng phục vụ Quý khách với mục tiêu trở thành khách sạn hàng đầu tại Sài Gòn để góp phần long trọng đón tiếp Quý khách gần xa về với miền đất của các vị vua hùng thời xưa! </div>
        
        </div>
        </img>
</div>


    <div class="page-section section section-padding">
        <div class="container">
            <div class="row row-30 mbn-40">

               <div class="contact-info-wrap col-md-6 col-12 mb-40">
                   <h2>Liên Hệ </h2>
                   <p class ="textN"> Nếu quý khách đặt phòng có thắc mắc hay câu hỏi gì về khách sạn xin liên hệ chúng tôi </p>
                   <ul class="contact-info">
                       <li>
                           <i class="fa fa-map-marker"></i>
                           <p>18B Cộng hòa , phường 3, Quận Tân Bình, TPHCM   <br>will be here</p>
                       </li>
                       <li>
                           <i class="fa fa-phone"></i>
                           <p><a href="#">+0955 232 222 </a></p>
                       </li>
                       <li>
                           <i class="fas fa-comment-dots"></i>
                           <p><a href="#">wwwLDLuxury.com</a></p>
                       </li>
                   </ul>
               </div>
               <div class="contact-form">
                <h3><i class="far fa-envelope-open"></i> Gửi tin nhắn</h3>
                <form  method="post" name="form">
                  <input type="text"  name="Hoten"placeholder="Họ và tên" required>
                  <input type="email" name="email" placeholder="Email" required>
                  <input type="Noidung" name="Noidung" placeholder="Nội dung" required>
                  <button type="submit" name="submit">Gửi</button>
                </form>
              </div>
            </div>  
        </div>
        <div>


</body> 


</html>




    



