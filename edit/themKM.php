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
$id = "";
$name = ""; 
$ct = "";
$idlog = "";
$date1 = "";
$date2 = "";

    if(isset($_POST["submit"])) { 
        $id = $_POST['id']; 
        $name = $_POST['name']; 
        $ct = $_POST['ct'];
        $idlog = $_POST['idlog'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
   
    $sql = "INSERT INTO tb_ctkhuyenmai(`Mã KM`,`Tên KM`,`Chi tiết KM`,`Mã LP`,`Ngày bắt đầu`,`Ngày kết thúc`)
    VALUES ('$id','$name','$ct','$idlog','$date1','$date2')";
    if (mysqli_query($conn, $sql)) {
        Header("Location: ../Admin/QLKhuyenmai.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }
} 
?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Thêm khuyến mãi</h1>
            <div class="form-group">
            <i class="fas fa-info"></i>
                <input type="number" name ="id" class="form-input" placeholder="Mã KM" id="Mã KM">
            </div>
            <div class="form-group">
            <i class="fal fa-question-circle"></i>
                <input type="text" name ="name" class="form-input" placeholder="Tên KM" id="Tên KM">
            </div>
            <div class="form-group">
            <i class="fas fa-th-large"></i>
                <input type="text" name ="ct" class="form-input" placeholder="Chi tiết KM" id="Chi tiết KM">
            </div>
            <div class="form-group">
            <i class="fas fa-tags"></i>
                <input type="text" name ="idlog" class="form-input" placeholder="Mã LP" id="Mã LP">
                </div>
                <div class="form-group">
            <i class="fal fa-calendar-alt"></i>
                <input type="date" name ="date1" class="form-input" placeholder="Ngày bắt đầu" id="Ngày bắt đầu">
                </div>
                <div class="form-group">
            <i class="fal fa-calendar-alt"></i>
                <input type="date" name ="date2" class="form-input" placeholder="Ngày kết thúc" id="Ngày kết thúc">
                </div>
            
            <button href=" " type="submit" name="submit" class="dangki" > Thêm khuyến mãi </button>
            <a class="dangnhap"href='../Admin/QLKhuyenmai.php'> Trở lại quản lí khuyến mãi </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>