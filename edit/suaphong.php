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

    <title>Sửa phòng</title>
</head>

<body>
<?php
        $id=$_GET['id'];
        include('../control/Connectdb.php');
          if (isset($_POST["submit"])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $idlp = $_POST['idlp'];
            $cost = $_POST['cost'];
            $des = $_POST['des'];
            $img = $_POST['img'];
            $updatesql = "UPDATE `tb_phong` SET `Mã Phòng`='$id',`Tên Phòng`='$name',`Mã LP`='$idlp',`Giá Phòng (Ngày)`='$cost',`Mô tả`='$des',`Hình ảnh`='$img' WHERE `Mã Phòng` like '%$id%'";
            if (mysqli_query($conn, $updatesql)) {
             header("Location: ../Admin/QLPhong.php");
           } else {
               echo "Error: ".$sql . mysqli_error($conn);
           }
        }
        $sql="SELECT * FROM `tb_phong` WHERE `Mã Phòng` like '%$id%'";
        $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
        ?>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa phòng</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id" class="form-input" value="<?php echo $row["Mã Phòng"];?>" placeholder="Mã Phòng" id="Mã Phòng">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="name" class="form-input" value="<?php echo $row["Tên Phòng"];?>" placeholder="Họ và tên" id="Tên KH">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="text" name ="idlp" class="form-input" value="<?php echo $row["Mã LP"];?>" placeholder="SĐT" id="SĐT">
            </div>
            <div class="form-group">
             <i id="calendar" class="fa fa-calendar" aria-hidden="true"></i>
                <input type="text" name ="cost" class="form-input" value="<?php echo $row["Giá Phòng (Ngày)"];?>" placeholder="Ngày sinh" id="Ngày sinh">
            </div>
            <div class="form-group">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input type="text" name ="des" class="form-input" value="<?php echo $row["Mô tả"];?>" placeholder="Quê quán" id="qq">
            </div>
            <div class="form-group">
                <i class="fa fa-tag" aria-hidden="true"></i>
                <input type="image" name ="img" class="form-input" value="<?php echo $row["Hình ảnh"];?>" placeholder="Chức vụ" id="role">
            </div>
            <button type="submit" class="dangki" name="submit" > Sửa phòng </button> 
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