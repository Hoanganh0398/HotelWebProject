
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dichvu.css" type="text/css">

</Head>
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
    <div class ="animation start-theodoi"></div>
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
    <div class="Font">
        
        <!--  <h2 class = "danh_muc"></h2>  note 
    <div class = "FontBackground">Nhân viên</div>-->


    <div class="tableW">
    <div class="table-wrapper">
    <table>
    <tr >
        <th> Mã DV </th>
        <th> Tên DV </th>
        <th> Loại DV </th>
        <th> Giá DV </th>
    </tr>

<?php
    include("../control/Control.php");
    $control = new control();
    $result=$control->lay_dsdv();
?>
<?php
while ($row=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $row["Mã DV"];?></td>
    <td><?php echo $row["Tên DV"];?></td>
    <td><?php echo $row["Loại DV"];?></td>
    <td><?php echo $row["Giá DV"];?></td>
    
</tr>
<?php
}
?>
</table>
        </div>
    </div>
</div>

</body> </div>
<!--<footer class="footer">
        <div class="FontFooter">
        <div class="diachi"> <h3>Địa chỉ</h3> Hotel </div>
        <div class="lienhe"> <h3>Liên hệ: </h3>0931988451</div>
        </div>
    </footer> -->
</html>

