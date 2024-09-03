<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html lang="en">
<Head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Quản lí khách sạn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Sửa nhân viên</title>
</head>
<?php
        $id=$_GET['id'];
        include('../control/Connectdb.php');
        if (isset($_POST["submit"])){
            $name = $_POST['name'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            $date = $_POST['date'];
            $qq = $_POST['qq'];
            $role = $_POST['role'];
            $idpq = $_POST['idpq'];
            $updatesql = "UPDATE `tb_nhanvien` SET `Tên NV`='$name',`SĐT`='$sdt',`Giới tính`='$gioitinh',`Ngày sinh`='$date',`Quê quán`='$qq',`Chức vụ`='$role',`Mã phân quyền`='$idpq' WHERE `Mã NV`=".$id;
            if (mysqli_query($conn, $updatesql)) {
             header("Location: ../Admin/QLNhanvien.php");
           } else {
               echo "Error: ".$sql . mysqli_error($conn);
           }
        }
        $sql="SELECT * FROM `tb_nhanvien` WHERE `Mã NV` =$id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        ?>

<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa nhân viên</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id" readonly="readonly" class="form-input" value="<?php echo $row["Mã NV"];?>" placeholder="Mã NV" id="Mã NV">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="name" class="form-input" value="<?php echo $row["Tên NV"];?>" placeholder="Họ và tên" id="Tên KH">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="text" name ="sdt" class="form-input" value="<?php echo $row["SĐT"];?>" placeholder="SĐT" id="SĐT">
            </div>
            <div class="form-group">
             <i id="calendar" class="fa fa-calendar" aria-hidden="true"></i>
                <input type="text" name ="date" class="form-input" value="<?php echo $row["Ngày sinh"];?>" placeholder="Ngày sinh" id="Ngày sinh">
            </div>
            <div class="form-group">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input type="text" name ="qq" class="form-input" value="<?php echo $row["Quê quán"];?>" placeholder="Quê quán" id="qq">
            </div>
            <div class="form-group">
                <i class="fa fa-tag" aria-hidden="true"></i>
                <input type="text" name ="role" class="form-input" value="<?php echo $row["Chức vụ"];?>" placeholder="Chức vụ" id="role">
            </div>
            <div class="form-group">
                <i class="fas fa-passport"></i>
                <input type="text" name ="idpq" class="form-input" value="<?php echo $row["Mã phân quyền"];?>" placeholder="Mã phân quyền" id="id">
            </div>
            <div class="form-se">
                <label for="">Giới tính</label>
            </div>
            <div class="form-check-inline1">
                <input class="form-check-input1" type ="radio" name="gioitinh" checked id="male" value="Nam">
                <label class = "form-check-label1" for ="Nam" >Nam <i class="fa fa-mars" aria-hidden="true"></i></label> 
            </div>
            <div class="form-check-inline2">
                <input class="form-check-input2" type ="radio" name="gioitinh" checked id="female" value="Nữ" >
                <label class = "form-check-label2" for ="Nữ" >Nữ <i class="fa fa-venus" aria-hidden="true"></i> </label> 
            </div>

            <button type="submit" class="dangki" name="submit" > Sửa nhân viên </button> 
            <a class="dangnhap"href='../Admin/QLnhanvien.php'> Trở lại quản lý nhân viên </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        
        </form>
    </div>
    <?

?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>