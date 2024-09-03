<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> 
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Sửa dịch vụ</title>
</head>

<?php
        $id=$_GET['id'];
        require_once('../control/Connectdb.php');
        if(isset($_POST["submit"])) { 
        $name = $_POST['name']; 
        $idlog = $_POST['idlog']; 
        $number = $_POST['number']; 
   
    $sql = "UPDATE `tb_dichvu` SET `Tên DV`='$name',`Loại DV`='$idlog',`Giá DV`='$number' WHERE `Mã DV`=" .$id;
    if (mysqli_query($conn, $sql)) {
        Header("Location:../Admin/QLDichvu.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }    
} 
   $sql="SELECT * FROM `tb_dichvu` WHERE `Mã DV` =$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa dịch vụ</h1>
            <div class="form-group">
            <i class="fas fa-info"></i>
                <input type="text" name ="id" readonly="readonly" class="form-input" value="<?php echo $row["Mã DV"];?>" placeholder="Mã DV" id="Mã DV  ">
            </div>
            <div class="form-group">
            <i class="fas fa-th-large"></i>
                <input type="text" name ="name" class="form-input" placeholder="Tên DV" value="<?php echo $row['Tên DV']?>">
            </div>
            <div class="form-group">
            <i class="fas fa-tags"></i>
                <input type="text" name ="idlog" class="form-input" value="<?php echo $row['Loại DV']?>" placeholder="Loại DV" >
            </div>
            <div class="form-group">
            <i class="far fa-dollar-sign"></i>
                <input type="text" name ="number" class="form-input" value="<?php echo $row['Giá DV']?>" placeholder="Giá DV" >
            </div>
            
            
            <button href="QLDichvu.php" type="submit" name="submit" class="dangki" > Sửa dịch vụ </button>
            <a class="dangnhap"href='../Admin/QLDichvu.php'> Trở lại quản lí dịch vụ </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>