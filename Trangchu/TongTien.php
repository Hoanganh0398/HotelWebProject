<?php
   session_start();
  //session_destroy()
    if(isset($_SESSION['soluongphong']) and ($_SESSION['soluongphong']>0))
         {
    ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lề Đường Luxury</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../css/theodoi.css" type="text/css">
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
    <a title="" href="datphong_theodoi.php">Theo dõi</a> 
    <a title="" href="Dichvu.php">Dịch vụ</a>
    <a title="" href="#sales">Các ưu đãi</a>
    <a title="" href="#about">Liên hệ</a>
    <a title="" href="#about">Về chúng tôi</a>
    
    <div class ="animation start-theodoi"></div>
   
    <a href="" class="active"><?php echo $_SESSION['fullname']?></a>
 
    
    <div class="search-container">
        <form action="timkiem.php" method="POST">
        <input  class = "SearchFont" type="text" placeholder="Tìm kiếm..." name="search">
        <button title="Tìm kiếm" type="submit" name="submit"><i class="fa fa-search"></i></button>
        
        </form>
        
    </div>
</nav>
</header>
    
<body> 
<div class="TT"> 
    <a href="datphong_theodoi.php" class="Thanhtien">Theo dõi</a>
    </div>
    <div class="Theodoi1"> 
    <a href="TongTien.php" class="Theodoi2">Thành tiền</a>
    </div>
<br><br><br>
    <div class ="Danhmuc">
    <form id="dangky" method="post" action="../control/CapnhatphongYT.php">   
        
    <table>
            <tr>
                <td>STT</td>
                <td>Tên Phòng</td>
                <td>Giá</td>
            </tr>
         <?php 
                $tong=0;
            for($i=1;$i<=$_SESSION["soluongphong"];$i++){
            $tong=$tong+($_SESSION["dongia".$i]);
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $_SESSION["tenphong".$i]?></td>
                <td><?php echo number_format($_SESSION["dongia".$i], 0,",",".")?> VNĐ</td>
            </tr>
            <?php
            }
            ?>
            </table>
            <table>
            <tr>
                <td>Thành tiền</td>
                <td><?php echo number_format($tong, 0,",",".")?> VNĐ</td>
            </tr>
            </table>
            <a href="Danhmuc.php" class="button1">Trở về</a>
           
           <a href="datphong_thanhtoan.php" class="button2">Đặt ngay</a>
         <?php
        }
         ?>
    </form>
    </div>
</body>
