<?php
   session_start();
  //session_destroy();
    if(isset($_SESSION['fullname'])){
        if (!isset($_SESSION["soluongphong"]))
        {
            $_SESSION["soluongphong"]=0;
        }
    if ($_SESSION["soluongphong"]==0)
    {
        echo"</br>";
        echo"<div align='center'>Bạn chưa theo dõi phòng nào</div>";
        echo"<div align='center'><a href='Danhmuc.php'>Quay lại theo dõi ngay!</a></div>";
        $_SESSION["soluongphong"]=0;
    }
    if(isset($_SESSION['soluongphong']) and ($_SESSION['soluongphong']>0))
         {
    ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lề Đường Luxury</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../css/theodoi.css" type="text/css">
    
    
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
   <div class="TT"> 
    <a href="datphong_theodoi.php" class="Thanhtien">Theo dõi</a>
    </div>
    <div class="Theodoi1"> 
    <a href="TongTien.php" class="Theodoi2">Thành tiền</a>
    </div>
<br><br><br>
    <div class ="Danhmuc">
        
    <form id="dangky" method="post" action="">
         <?php 
            for($i=1;$i<=$_SESSION["soluongphong"];$i++)
            { 
                $tong=0;
         ?>
            <div id="detail">
                <div id="Img">
                <img src="../Images/<?php echo $_SESSION["hinhanh".$i]?>"/> 
                </div>
                <div id="info">
                    <div  class ="STT"> <i class="fa-sharp fa-solid fa-hashtag"></i> <?php echo $i?> </div>
                    <div class ="Tenphong"> Tên Phòng:  <?php echo $_SESSION["tenphong".$i]?></div>
                    <div class ="Tinhtrang">Tình Trạng:  <?php echo $_SESSION["mota".$i]?> </div>
                    <div class ="ID" >Giá Phòng:  <?php echo number_format($_SESSION["dongia".$i], 0,",",".")?></div>
                    <a title="Bỏ theo dõi" class="Theodoi" href="../edit/xoadatphong.php?id=<?php echo $i;?>" onclick="return confirm('Bạn có thực sự muốn bỏ theo dõi?')">
                    <i class="fa-sharp fa-solid fa-heart"></i>  </a> 
                    
                </div>
            </div>
                <div class="khoangtrang">
                </div>
                </form>
         <?php
        }
            ?>
         </table>            
         
         <a href="Danhmuc.php" class="button1">Trở về</a>
        
         <a href="Dichvu.php" class="button1">Thuê dịch vụ</a>
         <a href="datphong_thanhtoan.php" class="button2">Đặt ngay</a>
         <?php
        }
    }
    else 
    {
        echo "Đăng nhập để truy cập trang. ";
        echo  "<a href='Dangnhap.php'>Đăng nhập ngay! </a>";
    }
         ?>
    
    </div>
</body>
