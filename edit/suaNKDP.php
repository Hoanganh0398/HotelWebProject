<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Sửa nhật kí đặt phòng</title>
</head>

<?php
        $id=$_GET['id'];
        require_once('../control/Connectdb.php');
        if(isset($_POST["submit"])) { 
        $id1 = $_POST['id1']; 
        $id2 = $_POST['id2']; 
        $date1 = $_POST['date1']; 
        $date2 = $_POST['date2']; 
        $date3 = $_POST['date3'];  
        $gia = $_POST['gia']; 
        $tien = $_POST['tien'];
        $note = $_POST['note'];
   
    $sql = "UPDATE `tb_nhatkydatphong` SET `Mã KH`='$id1',`Mã KM`='$id2',`Ngày đặt`='$date1',`Ngày lấy phòng`='$date2',`Ngày dự kiến trả phòng`='$date3',`Đơn giá`='$gia',`Tiền cọc`='$tien',`Ghi chú`='$note' WHERE `Mã NKDP`=" .$id;
    if (mysqli_query($conn, $sql)) {
        Header("Location:../Admin/QLNKDP.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }
} 
   $sql="SELECT * FROM `tb_nhatkydatphong` WHERE `Mã NKDP` =$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa khách hàng</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id" readonly="readonly" class="form-input" value="<?php echo $row["Mã NKDP"];?>" placeholder="Mã nhật kí đặt phòng" id="Mã NKDP">
            </div>
            <div class="form-group">
            <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id1" class="form-input"  value="<?php echo $row['Mã KH']?> " placeholder="Mã khách hàng">
            </div>
            <div class="form-group">
            <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id2" class="form-input" value="<?php echo $row['Mã KM']?>" placeholder="Mã khuyến mãi" >
            </div>
            <div class="form-group">
            <input type="date" name="date1" class ="date1" class="form-input" value="<?php echo $row['Ngày đặt']?>" placeholder="Ngày đặt">
            </div>
            <div class="form-group">
            <input type="date" name="date2" class="date2" value="<?php echo $row['Ngày lấy phòng']?>" placeholder="Ngày lấy phòng">
            </div>
            <div class="form-group">
            <input type="date" name="date3" class="date3" value="<?php echo $row['Ngày dự kiến trả phòng']?>" placeholder="Ngày dự kiến trả phòng'">
            </div>
            <div class="form-group">
            <i class="fa-solid fa-dollar-sign"></i>
                <input type="number" name ="gia" class="form-input" value="<?php echo $row['Đơn giá']?>" placeholder="Đơn giá" >
            </div>

            <div class="form-group">
            <i class="fa-solid fa-dollar-sign"></i>
                <input type="number" name ="tien" class="form-input" value="<?php echo $row['Tiền cọc']?>" placeholder="Tiền cọc" >
            </div>
            
            <div class="form-group">
                <i class="fas fa-passport"></i>
                <input type="text" name ="note" class="form-input" value="<?php echo $row['Ghi chú']?>" placeholder="Ghi chú" >
            </div>
            <button href="../Admin/QLNKDP.php" type="submit" name="submit" class="dangki" > Sửa nhật kí đặt phòng </button>
            <a class="dangnhap"href='../Admin/QLNKDP.php'> Trở lại quản lí nhật kí </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>