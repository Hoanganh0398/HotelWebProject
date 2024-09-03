<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../css/Dangki.css" type="text/css">
    <title>Thêm nhân viên</title>
</head>

<?php
        include('../control/Connectdb.php');
        
        $name = "";
        $sdt = "";
        $gioitinh = "";
        $date = "";
        $qq = "";
        $role = "";
        $idpq = "";
    
        if (isset($_POST["submit"])){
            $name = $_POST['name'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            $date = $_POST['date'];
            $qq = $_POST['qq'];
            $role = $_POST['role'];
            $idpq = $_POST['idpq'];
        
            $sql = "INSERT INTO tb_nhanvien(`Tên NV`,`SĐT`,`Giới tính`,`Ngày sinh`,`Quê quán`,`Chức vụ`,`Mã phân quyền`) 
            VALUES ('$name','$sdt','$gioitinh','$date', '$qq','$role','$idpq')";
            if (mysqli_query($conn, $sql)) {
                header('location:../Admin/QLNhanvien.php');
           } else {
               echo "Error: ".$sql . mysqli_error($conn);
           }
}
?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Thêm nhân viên</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="name" class="form-input" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="number" name ="sdt" class="form-input" placeholder="SĐT">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="date" class="form-input" placeholder="Ngày sinh">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="text" name ="qq" class="form-input" placeholder="Quê quán">
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="text" name ="role" class="form-input" placeholder="Chức vụ">
            </div>

            <div class="form-group">
                <i class="fas fa-passport"></i>
                <input type="text" name ="idpq" class="form-input" placeholder="Mã phân quyền">
            </div>
            <div class="form-se">
                <label for="">Giới tính</label>
            </div>
            <div class="form-check-inline1">
                <input class="form-check-input1" type ="radio" name="gioitinh" checked id="male" value="Nam">
                <label class = "form-check-label1" for ="Nam" >Nam</label> 
            </div>
            <div class="form-check-inline2">
                <input class="form-check-input2" type ="radio" name="gioitinh" checked id="female" value="Nữ">>
                <label class = "form-check-label2" for ="Nữ" >Nữ</label> 
            </div>

            <button type="submit" name="submit" class="dangki" > Thêm nhân viên </button> 
            <a class="dangnhap"href='../Admin/QLnhanvien.php'> Trở lại quản lý nhân viên </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>