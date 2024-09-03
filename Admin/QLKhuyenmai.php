<?php 
    session_start();
    
    if(isset($_SESSION['fullname'])){
        if (isset($_SESSION['role']) == true) {
            $role=$_SESSION['role'];
        if ($role != '0') {
            if ($role != '1') {
            echo "Bạn không đủ quyền truy cập vào trang này<br>";
            echo "<a href='Admin.php'> Click để về lại trang chủ</a>";
            exit();
            }
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/QLKhuyenmai.css" type="text/css">

</Head>
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
        
        <div class ="animation start-menu"></div>
       
        
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
<div class="maincontent">
<div class="Font">
        
        <!--  <h2 class = "danh_muc"></h2>  note 
  <div class = "FontBackground">Nhân viên</div>-->
  <a class="button1" href='../edit/themNV.php'>
  <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
  <div class="tableW">
  <div class="table-wrapper">
  <table>
    <tr >
        <th> Mã KM </th>
        <th> Tên KM </th>
        <th> Chi tiết KM </th>
        <th> Mã LP </th>
        <th> Ngày bắt đầu </th>
        <th> Ngày kết thúc </th>
        <th> Tác vụ </th>
    </tr>

<?php
    include("../control/Control.php");
    $control = new control();
    $result=$control->lay_dskm();
?>
<?php
while ($row=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $row["Mã KM"];?></td>
    <td><?php echo $row["Tên KM"];?></td>
    <td><?php echo $row["Chi tiết KM"];?></td>
    <td><?php echo $row["Mã LP"];?></td>
    <td><?php echo $row["Ngày bắt đầu"];?></td>
    <td><?php echo $row["Ngày kết thúc"];?></td>
    <td >
        <a  href="../edit/suaKM.php?id=<?php echo $row["Mã KM"];?>">
        <i class="fa fa-pencil" aria-hidden="true"></i></a>
       
        <a href="../edit/xoaKM.php?id=<?php echo $row["Mã KM"];?>" onclick="return confirm('Bạn có thực sự muốn xóa?')">
        <i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
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

<?php
    }
} 

else 
{
    echo "Bạn cần đăng nhập để có thể truy cập trang! ";
    echo  "<a href='Dangnhap.php'>Đăng nhập ngay! </a>";
}
?>