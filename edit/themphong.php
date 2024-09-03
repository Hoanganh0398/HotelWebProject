<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=d  evice-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">

    <title>Thêm phòng</title>
</head>

<body>
<?php
    include('../control/Connectdb.php');
        $id="";
        $name = "";
        $idlp = "";
        $cost = "";
        $des = "";
        $img = "";
          if (isset($_POST["submit"])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $idlp = $_POST['idlp'];
            $cost = $_POST['cost'];
            $des = $_POST['des'];
            $img = $_POST['img'];
            $updatesql = "INSERT INTO `tb_phong`(`Mã Phòng`,`Tên Phòng`,`Mã LP`,`Giá Phòng (Ngày)`,`Mô tả`,`Hình ảnh`)
            VALUE('$id','$name','$idlp','$cost','$des','$img')";
            if (mysqli_query($conn, $updatesql)) {
             header("Location: ../Admin/QLPhong.php");
           } else {
               echo "Error: ".$sql . mysqli_error($conn);
           }
}
        ?>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Thêm phòng</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id" class="form-input" placeholder="Mã Phòng">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="name" class="form-input" placeholder="Tên Phòng">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="text" name ="idlp" class="form-input" placeholder="Mã LP">
            </div>
            <div class="form-group">
             <i id="calendar" class="fa fa-calendar" aria-hidden="true"></i>
                <input type="text" name ="cost" class="form-input" placeholder="Giá Phòng (Ngày)">
            </div>
            <div class="form-group">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input type="text" name ="des" class="form-input" placeholder="Mô tả">
            </div>
            <div class="form-group">
                <i class="fa fa-tag" aria-hidden="true"></i>
                <input type="image" name ="img" class="form-input" placeholder="Hình ảnh">
            </div>
            <button type="submit" class="dangki" name="submit" > Thêm phòng </button> 
            <a class="dangnhap"href='../Admin/QLnhanvien.php'> Trở lại quản lý phòng </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        
        </form>
    </div>
    <?

?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>