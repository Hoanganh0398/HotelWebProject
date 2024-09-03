 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<?php
    include_once("../control/Control.php");
    $control = new control();
    $id=$_GET['search'];
    $result=$control->lay_dmlp();

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
    <a class ="Logotask"></a>
    <a href="../Admin/Admin.php">Trang quản trị</a>
    <a href="../Admin/QLPhong.php">Quản lí phòng</a>
    <a href="../Admin/QLNhanvien.php">Quản lí nhân viên</a>  
    <a href="../Admin/QLKhachhang.php">Quản lí khách hàng</a>  
    <a href="../Admin/QLKhuyenmai.php">Quản lí khuyến mãi</a>
    <a href="../Admin/QLDichvu.php">Quản lí dịch vụ</a>

 
    <div class="LOGO">
        <a class="active" href="../Trangchu/Dangnhap.php">Đăng nhập</a>
    </div>
    <div class="search-container">
        <form action="../viewAdmin/timkiemAdmin.php" >
        <input class = "SearchFont" type="text" placeholder="Tìm kiếm..." name="search">
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        
        </form>
    </div>
    </div>
   
</div>
<div class="maincontentL">
    <div class ="Danhmuc">Danh mục phòng</div>
    <div></div>
<?php
while ($row=$result->fetch_assoc())
{?>

    <label class="container"> <?php echo $row["Loại phòng"];?> 
    <a href="../Chiadanhmuc.php?id=<?php echo $row["Mã LP"];?>">
  <input type="checkbox">
  <span class="checkmark"></span></a>
</label>
<?php
}
?>
<button class="button1" onclick="window.location.href='../edit/themphong.php'">Thêm Phòng Mới</button>
</div>
<div class="maincontentR">
    <div class="Font">
        <div >
          <!--  <h2 class = "danh_muc"></h2>  note -->
    <div class = "FontBackground">Phòng đã tìm:</div>
    <div class="grid-middle"> <?php 
    //include("../control/Control.php");
    $control = new control();
    if (isset($_POST['submit']))
        $id=$_POST['search'];
        
    else
        $tenphong="";
        $result=$control->timkiemphong($id);
?>
<?php
if ($result->num_rows<=0)
    echo "Không tìm thấy sản phẩm!";
  else
    while ($row=$result->fetch_assoc())
    {?>
        <div id="phongTim">
          <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
        <br>
        <span><b><?php echo $row["Tên Phòng"];?></b></span>
        </br>
        <span style='front-weight:bold'> <?php echo $row["Giá Phòng (Ngày)"]?>
        </span>
    </br>
        <span>
            <button class="button1" onclick="window.location.href='../DatPhong.php'">Sửa</button>
            <button class="button1">Xóa</button>
        </span>
        </div>
        <?php
    }
    ?> 
    
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