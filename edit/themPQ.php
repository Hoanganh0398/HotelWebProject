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
    <title>Thêm phân quyền</title>
</head>

<?php
        include('../control/Connectdb.php');
$id = "";
$name = ""; 

    if(isset($_POST["submit"])) { 
        $id = $_POST['id']; 
        $name = $_POST['name']; 
   
    $sql = "INSERT INTO tb_phanquyen(`Mã phân quyền`,`Tên vai trò`)
    VALUES ('$id','$name')";
    if (mysqli_query($conn, $sql)) {
        Header("Location: ../Admin/QLPhanquyen.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }
} 
?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Thêm phân quyền</h1>
            <div class="form-group">
            <i class="fas fa-info"></i>
                <input type="number" name ="id" class="form-input" placeholder="Mã phân quyền" id="Mã PQ">
            </div>
            <div class="form-group">
            <i class="fal fa-question-circle"></i>
                <input type="text" name ="name" class="form-input" placeholder="Tên vai trò" id="Tên VT">
            </div>
           
            
            <button href=" " type="submit" name="submit" class="dangki" > Thêm phân quyền </button>
            <a class="dangnhap"href='../Admin/QLPhanquyen.php'> Trở lại Menu </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>