<?php
    include_once("../control/Control.php");
    $control = new control();

?>
<div class="grid-middle">
<?php
    if(!isset ($_GET["p"]))
    $p=1;
    else
    $p=intval($_GET["p"]);
    $sophong=6 ;
    $result=$control->lay_phong($sophong,$p);
    while ($row=$result->fetch_assoc())
    {?>
        <div id="phong">
          <a href="../view/Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
          <div class="contentphong">
        <br>
        <span class="Tenphong"><b><?php echo $row["Tên Phòng"];?></b></span>
        </br>
        <span id="Gia" style='front-weight:bold'> <?php echo number_format($row['Giá Phòng (Ngày)'],0,",",".");?> VND
        </span>

        <div class = "nut">
          <?php if(isset($_SESSION['fullname'])){ ?>
        <a class="button1" href="../Trangchu/datphong.php?id=<?php echo $row["Mã Phòng"];?>">Theo dõi</a>
        <?php } else 
    {
      ?>
      <a class=button1 href='../Trangchu/Dangnhap.php' onclick="return confirm('Bạn cần đăng nhập để có thể theo dõi phòng!')">Theo dõi</a>
      
      <a class="button1" href='../Trangchu/Dangnhap.php' onclick="return confirm('Bạn cần đăng nhập để có thể đặt phòng!')">Đặt ngay</a>
      <?php
    }
    ?>
        
        </div>
        </div>
        </div>
        <?php
}
?>
</div>
<div class="sophantrang"> 
 <?php
 $control->PhantrangPhong($sophong,$p)
 ?>
</div>