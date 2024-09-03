<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<?php
    include_once("control/Control.php");
    $control = new control();
    $id=$_GET['id'];
    $result=$control->lay_dmtlp($id);
?>
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Danhmucphong.css" type="text/css">

</Head>
<body>
<div class="BB">   
<div class="B">LỀ ĐƯỜNG LUXURY</div>
</div>

<div class="taskbar">
    <div class="LOGO">
        <a class="active" href="Dangnhap.php">Đăng nhập</a>
    </div>
    <a href="index.php">Trang chủ</a>  
    <a href="#list">Danh mục các phòng</a>  
    <a href="#yum">Dịch vụ</a>
    <a href="#sales">Các ưu đãi</a>
    <a href="#about">Về chúng tôi</a>
    <div class="search-container">
        <form action="view/timkiemAdmin.php">
        <input class = "SearchFont" type="text" placeholder="Tìm kiếm..." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<div class="maincontentR">
    <div class="Font">
        <div class="Background">
          <!--  <h2 class = "danh_muc"></h2>  note -->
    <div class = "FontBackground">Các phòng được yêu thích</div>
    <div> <div class="grid-middle">
<?php
while ($row=$result->fetch_assoc())
{?>
    <div id="phong">
      <a href="../TrangchuC/Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="300px" height="300px"/></a> 
    <br>
    <span><b><?php echo $row["Tên Phòng"];?></b></span>
    </br>
    <span style='front-weight:bold'> <?php echo $row["Giá Phòng (Ngày)"]?>
    </span>
</br>
    <span>
        <button class="button1" onclick="window.location.href='FormDat.php'">Đặt ngay</button>
        <button class="button1">Ưu đãi</button>
    </span>
    </div>
    <?php
}

?> 

</div>
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