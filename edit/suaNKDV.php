<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/dbded4d725.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> 
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Sửa NKDV</title>
</head>

<?php
        $id=$_GET['id'];
        require_once('../control/Connectdb.php');
        if(isset($_POST["submit"])) { 
        $id = $_POST['id']; 
        $name = $_POST['name']; 
        $ct = $_POST['ct'];
    
   
    $sql = "UPDATE `tb_nhatkydv` SET `Mã NKDV`='$id',`Mã DV`='$name',`Đơn giá DV`='$ct' WHERE `Mã NKDV`=" .$id;
    if (mysqli_query($conn, $sql)) {
        Header("Location:../Admin/QLNKDV.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }    
} 
   $sql="SELECT * FROM `tb_nhatkydv` WHERE `Mã NKDV` =$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa nhật kí dịch vụ</h1>
            <div class="form-group">
            <i class="fas fa-info"></i>
                <input type="text" name ="id" class="form-input" placeholder="Mã nhật kí dịch vụ" value="<?php echo $row['Mã NKDV']?>">
            </div>
            <div class="form-group">
            <i class="fal fa-question-circle"></i>
                <input type="text" name ="name" class="form-input" value="<?php echo $row["Mã DV"];?>" placeholder="Tên Dịch vụ" id="Mã DV">
            </div>
            <div class="form-group">
            <i class="fa-solid fa-dollar-sign"></i>
                <input type="text" name ="ct" class="form-input" placeholder="Đơn giá" value="<?php echo $row['Đơn giá DV']?>">
            </div>
            
            
            
            <button href="QLNKDV.php" type="submit" name="submit" class="dangki" > Sửa nk dịch vụ </button>
            <a class="dangnhap"href='../Admin/QLNKDV.php'> Trở lại nhật kí </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>