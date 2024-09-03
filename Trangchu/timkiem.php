<?php session_start();
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
<head>
    <script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tìm kiếm phòng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Trangchudanhmucphong.css" type="text/css">
    
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
   
    <?php echo $_SESSION['fullname']?>
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
<div class="maincontentL">
    <div class ="Danhmuc">Danh mục phòng</div>
    <div></div>
<?php
while ($row=$result->fetch_assoc())
{?>

<a href="Chiadanhmuc.php?id=<?php echo $row["Mã LP"];?>" class="container"> <?php echo $row["Loại phòng"];?> 
</a>
<?php
}
?>
</div>
<div class="maincontentR">
    <div class="Font">
   
          <!--  <h2 class = "danh_muc"></h2>  note -->
    <div class = "FontBackground">Phòng đã tìm:</div>
    <div class="grid-middle"> <?php 
    //include("../control/Control.php");
    $control = new control();
    if (isset($_POST['submit']))
        $id=$_POST['search'];
    else
        $tenphong="";
        if(!isset ($_GET["p"]))
        $p=1;
        else
        $p=intval($_GET["p"]);
        $sophong=6;
        $result=$control->timkiemphong($id,$sophong,$p);
?>
<?php
    while ($row=$result->fetch_assoc())
    {?>
        <div id="phongTim">
        <a href="../view/Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
        <div class="contentphong">
        <br>
        <span><b><?php echo $row["Tên Phòng"];?></b></span>
        </br>
        <span style='front-weight:bold'> <?php echo $row["Giá Phòng (Ngày)"]?>
        </span>
    </br>
    <div class = "nut">
        <a class="button1" href="../Trangchu/datphong.php?id=<?php echo $row["Mã Phòng"];?>">Theo dõi</a>
        <a title="Bỏ theo dõi" class="Theodoi" href="../edit/xoadatphong.php?id=<?php echo $i;?>" onclick="return confirm('Bạn có thực sự muốn bỏ theo dõi?')">
                    <i class="fa-sharp fa-solid fa-heart"></i>  </a> 
        <a class="button1" href='../view/Datphong.php'>Đặt ngay</a>
    </div>
    </div>
    </div>
        <?php
    }
    ?>
    </div>
    </div>
    <div class="sophantrang"> 
     <?php
     $control->Phantrangtimkiemphong($sophong,$p)
     ?>
        </div>
    </div>


</body>
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
        echo "Bạn cần đăng nhập để có thể vào lại trang! ";
        echo  "<a href='Dangnhap.php'>Đăng nhập ngay! </a>";
    }
    ?>