<?php
    include_once("../control/Control.php");
    $control = new control();
    $result=$control->lay_phong();
?>
<div class="grid-middle">
<?php
while ($row=$result->fetch_assoc())
{?>
    <div id="phong">
      <a href="Chitietphong.php?id=<?php echo $row["Mã Phòng"];?>"> <img src="../Images/<?php echo $row["Hình ảnh"];?>" width="250px" height="250px"/></a> 
    <br>
    <span><b><?php echo $row["Tên Phòng"];?></b></span>
    </br>
    <span id="Gia" style='front-weight:bold'> <?php echo $row["Giá Phòng (Ngày)"]?>
    </span>
</br>
    <span>
        <a class="button1" href='Datphong.php'>Đặt ngay</a>
        <a class="button1">Ưu đãi</a>
    </span>
    </div>
    <?php
}
?>