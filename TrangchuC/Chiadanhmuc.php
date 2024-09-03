<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">

<?php
    include_once("../control/Control.php");
    $control = new control();
    $result=$control->lay_dmlp();
?>

<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lề Đường Luxury</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Danhmucphong.css" type="text/css">

</head>

<header>
<div class="BB">   
<div class="B"></div>
</div>
<nav class="taskbar">
<!--<a class ="Logotask"></a> -->

    <a title="" href="index.php">Trang chủ</a>  
    <a title="" href="Danhmucphong.php">Danh mục các phòng</a> \
    
    <a title="" href="Dichvu.php">Dịch vụ</a>
    <a title="" href="#sales">Các ưu đãi</a>
    <a title="" href="#about">Liên hệ</a>
    <a title="" href="#about">Về chúng tôi</a>
    <div class ="animation start-danhmuc"></div>
        <a title="Đăng nhập" class="active" href="../Trangchu/Dangnhap.php">Đăng nhập</a>

    <div class="search-container">
        <form action="../TrangchuC/timkiem.php" method="POST">
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
    <div class="grid-middle">
        <?php
    include_once("../control/Control.php");
 //   $id=$_GET['id'];
    $control = new control();
    if(!isset ($_GET["p"]))
    $p=1;
    else
    $p=intval($_GET["p"]);
    $sophong=6;
    $result = $control->lay_dmtlp($sophong,$p);
while ($row=$result->fetch_assoc())
{?>
    <div id="phong">
      <a href="../view/Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
    <br>
    <span><b><?php echo $row["Tên Phòng"];?></b></span>
    </br>
    <span id="Gia" style='front-weight:bold'> <?php echo number_format($row['Giá Phòng (Ngày)'],0,",",".")?> VND
    </span>
    <div class = "nut">
          <?php if(isset($_SESSION['fullname'])){ ?>
        <a class="button1" href="../Trangchu/datphong.php?id=<?php echo $row["Mã Phòng"];?>">Theo dõi</a>
        <?php } else 
    {
      ?>
      <a class=button1 href='../Trangchu/Dangnhap.php' onclick="return confirm('Bạn phải đăng nhập mới có thể theo dõi phòng!')">Theo dõi</a>
      <a class="button1" href='../Trangchu/Dangnhap.php'>Đặt ngay</a>
      <?php
    }
    ?>
        
        </div>
    </div>
    <?php
}

?>

</div>

<div class="sophantrang"> 
    <?php
 $control->PhantrangDSPhong($sophong,$p);
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
