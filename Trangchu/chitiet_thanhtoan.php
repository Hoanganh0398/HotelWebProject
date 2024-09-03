<?php
    session_start();
    ob_start();
    if(isset($_SESSION['fullname'])){
        $thanhcong=$_GET["thanhcong"];
        $iddp=$_GET["iddp"];
        if (isset($_GET["thanhcong"])==1){
    include_once('../control/Control.php');
    $control = new control();
    $result=$control->LayTTThanhToan($iddp);
?>
<?php 
 //   $result=$control->LayTTDangNhap($_SESSION["idKH"]);
 //   $thanhvien=$result->fetch_assoc();
//    $name=$thanhvien['Tên KH'];
 //   $sdt=$thanhvien['SĐT'];
  //  $email=$thanhvien['Email'];
  //  $cccd=$thanhvien['CCCD'];
?>
<!-- Hiển thị thông tin thanh toán -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lề Đường Luxury</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../css/thanhtoan.css" type="text/css">
    <script src ="../JavaScript/slide.js"></script>
    
    </head>

<header>
<div class="BB">   
<div class="B"></div>
</div>
<nav class="taskbar">
<!--<a class ="Logotask"></a> -->

    <a title="" href="Trangchu.php">Trang chủ</a>  
    <a title="" href="Danhmuc.php">Danh mục các phòng</a> 
    <a title="" href="Dichvu.php">Dịch vụ</a>
    <a title="" href="#sales">Các ưu đãi</a>
    <a title="" href="#about">Liên hệ</a>
    
    <a title="" href="#about">Về chúng tôi</a>
    
    <div class ="animation start-danhmuc"></div>
   
    
    <div class="active">Người dùng  
        <div class="text1">
         <div class="text2"><a href="" >Thông tin</a> </div>
         <div class="text3"><a href="datphong_theodoi.php" >Theo dõi</a> </div>
         <div class="text2" ><a href="Thanhtoan.php?id=<?php echo ($_SESSION['idKH'])?>">Thanh toán</a> </div>
         <div class="text2" ><a href="Dangxuat.php?id=<?php echo ($_SESSION['idKH'])?>" name="dangxuat" >Đăng xuất</a> </div>
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
<div class="tableW">
    <div class="table-wrapper">
    <table>
    
    <tr>
        <td> Mã NKDP</td>
        <td> Mã Phòng </td>
        <td> Đơn giá phòng </td>
    </tr>
<?php
while ($row=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $row["Mã NKDP"];?></td>
    <td><?php echo $row["Mã Phòng"];?></td>
    <td><?php echo $row["Đơn giá phòng"];?> VNĐ</td>
</tr>
<?php
}
?>
</table>
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
    <?php 
    }
    else 
    {
        echo "Bạn cần đăng nhập để có thể vào lại trang! ";
        echo  "<a href='Dangnhap.php'>Đăng nhập ngay! </a>";
    }
}
    ?>
</html>
