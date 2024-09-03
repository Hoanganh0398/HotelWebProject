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

    <title>Sửa phân quyền</title>
</head>

<body>
<?php
        $id=$_GET['id'];
        include('../control/Connectdb.php');
          if (isset($_POST["submit"])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $updatesql = "UPDATE `tb_phanquyen` SET `Tên vai trò`='$name' WHERE `Mã phân quyền` like '%$id%'";
            if (mysqli_query($conn, $updatesql)) {
             header("Location: ../Admin/QLPhanquyen.php");
           } else {
               echo "Error: ".$sql . mysqli_error($conn);
           }
        }
        $sql="SELECT * FROM `tb_phanquyen` WHERE `Mã phân quyền` like '%$id%'";
        $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
        ?>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa phân quyền</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" readonly="readonly" name ="id" class="form-input" value="<?php echo $row["Mã phân quyền"];?>" placeholder="Mã phân quyền" id="Mã">
            </div>
            <div class="form-group">
            <i class="fal fa-question-circle"></i>
                <input type="text" name ="name" class="form-input" value="<?php echo $row["Tên vai trò"];?>" placeholder="Tên vai trò" id="name">
            </div>
            <button type="submit" class="dangki" name="submit" > Sửa phân quyền </button> 
            <a class="dangnhap"href='../Admin/QLPhanquyen.php'> Trở lại menu </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        
        </form>
    </div>
    <?

?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>