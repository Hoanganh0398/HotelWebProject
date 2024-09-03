<?php 
    session_start();
    if(isset($_SESSION['fullname'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<?php
    include_once("../control/Control.php");
    $control = new control();
    $result=$control->lay_dmlp();
?>
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Admin.css" type="text/css">
    <script src ="../JavaScript/slide.js"></script>

    <header>
    
    <div class="BB">   
    <div class="B"></div>
    </div>
    <nav class="taskbar">
    <!--<a class ="Logotask"></a> -->
    
    <a title="" href="Admin.php">Trang chủ</a>  
        <a title="" href="QLPhong.php?role=<?php echo $_SESSION["role"]?>">Phòng</a> 
        <a title="" href="QLNhanvien.php?role=<?php echo $_SESSION["role"]?>">Nhân viên</a>
        <a title="" href="QLKhachhang.php?role=<?php echo $_SESSION["role"]?>">Khách hàng</a>
        <div class="nhatki" title="" href="#about">Nhật kí
        <div class="nhatki1">
         <div class="nhatki2"><a href="QLNKDP.php?role=<?php echo $_SESSION["role"]?>" >Đặt phòng</a> </div>
         <div class="nhatki3"><a href="QLNKDV.php?role=<?php echo $_SESSION["role"]?>" >Dịch vụ</a> </div>
        </div>
        </div>

        <div class="menu" title="" href="#about">Menu
        <div class="menu1">
         <div class="menu2"><a href="QLDichvu.php?role=<?php echo $_SESSION["role"]?>" >Dịch vụ</a> </div>
         <div class="menu3"><a href="QLKhuyenmai.php?role=<?php echo $_SESSION["role"]?>" >Khuyến mãi</a> </div>
         <div class="menu4"><a href="QLPhanquyen.php?role=<?php echo $_SESSION["role"]?>" >Phân quyền</a> </div>
        </div>
        </div>
        
        <div class ="animation start-home"></div>
       
        
        <div class="active">Tài khoản 
        <div class="text1">
         <div class="text2"><a href="" >Thông tin</a> </div>
         <div class="text4" ><a href="Dangxuat.php?id=<?php echo ($_SESSION['idNV'])?>" name="dangxuat" >Đăng xuất</a> </div>
        </div>
    </div>
        <div class="search-container">
            <form action="timkiem.php" method="POST">
            <input  class = "SearchFont" type="text" placeholder="Tìm kiếm..." name="search">
            <button title="Tìm kiếm" type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
            
        </div>
            
    </nav>
    </header>
    
 <body>

<div class="maincontentR">
    <div class="Font">
        <div class="Background">
          <!--  <h2 class = "danh_muc"></h2>  note -->
    <div class = "FontBackground"></div>
        </div>
    </div>
</div>

</body> </div>
<footer class="footer">
        <div class="FontFooter">
        <div class="diachi"> <h3>Địa chỉ</h3> Hotel </div>
        <div class="lienhe"> <h3>Liên hệ: </h3>0931988451</div>
        </div>
    </footer>
</html> 
<?php
}
else 
    {
        echo "Đăng nhập để truy cập trang. ";
        echo  "<a href='Dangnhap.php'>Đăng nhập ngay! </a>";
    }
         ?>



