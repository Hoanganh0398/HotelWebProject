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
    $sophong=9;
    $result=$control->lay_phong1($sophong,$p);
while ($row=$result->fetch_assoc())
{?>
    <div id="phong">
      <a href="../view/Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
    <div class="contentphong">
      <br>
    <span class="Tenphong"><b><?php echo $row["Tên Phòng"];?></b></span>
    </br>
    <span class="Gia" style='front-weight:bold'> <?php echo number_format($row['Giá Phòng (Ngày)'],0,",",".");?> VND
    </span>
</br>
    <div class = "nut">
        <a class="button1" href="datphong.php?id=<?php echo $row["Mã Phòng"];?>">Theo dõi</a>
<!-- Dùng if để theo dõi phòng -->
        <a title="Bỏ theo dõi" class="Theodoi" href="../edit/xoadatphong.php?id=<?php echo $i;?>" onclick="return confirm('Bạn có thực sự muốn bỏ theo dõi?')">
                    <i class="fa-sharp fa-solid fa-heart"></i>  </a> 

        <a class="button1" href='../view/FormDatNgay.php?id=<?php echo $row["Mã Phòng"];?>' onclick="return confirm('Xác nhận đặt phòng?')">Đặt ngay</a>
    </div>
    </div>
    </div>
    <?php
}
?>
</div>
<div class="sophantrang"> 
 <?php
 $control->PhantrangPhong1($sophong,$p)
 ?>
</div>