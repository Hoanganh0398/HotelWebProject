<!DOCTYPE html>
<html>
    <head>
        <title>Chi tiết phòng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Chitietphong.css" type="text/css">
    </head>
    <body>
        <?php
        include('../control/Connectdb.php');
        $id=$_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM `tb_phong` WHERE `Mã Phòng` LIKE '%$id%'");
        $product = mysqli_fetch_assoc($result);
        ?>
        <div class="container">
        
            
            <div class ="chitiet">Chi tiết phòng</div>

            <div id="detail">
                <div id="Img">
                <img src="../Images/<?php echo $product["Hình ảnh"];?>" />
                </div>
                <div id="info">
                    <div class ="Tenphong">Loại phòng:  <?=$product['Tên Phòng']?></div>
                    <div class ="Tinhtrang">Tình trạng phòng:  <?=$product['Mô tả']?> </div>
                    <div class ="ID" >Mã loại phòng:  <?=$product['Mã LP']?></div>
                    <div class ="Trangchu"><a class="fonttrangchu" href='../TrangchuC/Danhmucphong.php'>Trở về danh mục </a> </div>
                    <div class ="Datngay" > <a class="add-to-cart" href='Datphong.php'>Đặt ngay</a> </div>
                    
                </div>
                <div class="khoangtrang">
                </div>
                
            </div>
        </div>
    </body>
</html>