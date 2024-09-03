<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Thêm dịch vụ</title>
</head>

<?php
        include('../control/Connectdb.php');
$name = "";
$idlog= "";
$number = "";

    if(isset($_POST["submit"])) { 
        $name = $_POST['name']; 
        $idlog = $_POST['idlog']; 
        $number = $_POST['number']; 
   
    $sql = "INSERT INTO tb_dichvu(`Tên DV`,`Loại DV`,`Giá DV`)
    VALUES ('$name','$idlog','$number')";
    if (mysqli_query($conn, $sql)) {
        Header("Location: ../Admin/QLDichvu.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }
} 
?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Thêm dịch vụ</h1>
            <div class="form-group">
            <i class="fas fa-th-large"></i>
                <input type="text" name ="name" class="form-input" placeholder="Tên DV" id="Tên DV">
            </div>
            <div class="form-group">
            <i class="fas fa-tags"></i>
                <input type="text" name ="idlog" class="form-input" placeholder="Loại DV" id="Loại DV">
            </div>
            <div class="form-group">
            <i class="far fa-dollar-sign"></i>
                <input type="text" name ="number" class="form-input" placeholder="Giá DV" id="Giá DV">
                </div>
            
            <button href="QLKhuyenmai.php" type="submit" name="submit" class="dangki" > Thêm dịch vụ </button>
            <a class="dangnhap"href='../Admin/QLDichvu.php'> Trở lại quản lí dịch vụ </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>