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
      <a href="../Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
    <br>
    <span><b><?php echo $row["Tên Phòng"];?></b></span>
    </br>
    <span id="Gia" style='front-weight:bold'> <?php echo number_format($row['Giá Phòng (Ngày)'],0,",",".");?> VND
    </span>
</br>
    <div class ="nut">
    <a class="button1" href="../edit/suaphong.php?id=<?php echo $row["Mã Phòng"];?>">Sửa</a>
    <a class="button1" href="../edit/xoaphong.php?id=<?php echo $row["Mã Phòng"];?>" onclick="return confirm('Bạn có thực sự muốn xóa?')">Xóa</a>
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