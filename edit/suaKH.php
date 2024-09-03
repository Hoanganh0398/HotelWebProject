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
    <title>Sửa khách hàng</title>
</head>

<?php
        $id=$_GET['id'];
        require_once('../control/Connectdb.php');
        if(isset($_POST["submit"])) { 
        $name = $_POST['name']; 
        $idlog = $_POST['idlog']; 
        $pass = $_POST['pass']; 
        $sdt = $_POST['sdt']; 
        $email = $_POST['email']; 
        $cccd = $_POST['cccd']; 
        $gioitinh = $_POST['gioitinh']; 
   
    $sql = "UPDATE `tb_khachhang` SET `Tên KH`='$name',`Tên đăng nhập`='$idlog',`Mật khẩu`='$pass',`SĐT`='$sdt',`Email`='$email',`CCCD`='$cccd',`Giới tính`='$gioitinh',`Điểm tích lũy`='0' WHERE `Mã KH`=" .$id;
    if (mysqli_query($conn, $sql)) {
        Header("Location:../Admin/QLKhachhang.php");
   } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }
} 
   $sql="SELECT * FROM `tb_khachhang` WHERE `Mã KH` =$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Sửa khách hàng</h1>
            <div class="form-group">
                <i class="fa fa-info" aria-hidden="true"></i>
                <input type="text" name ="id" readonly="readonly" class="form-input" value="<?php echo $row["Mã KH"];?>" placeholder="Mã KH" id="Mã KH  ">
            </div>
            <div class="form-group">
            <i class="fa fa-id-card" aria-hidden="true"></i>
                <input type="text" name ="name" class="form-input" placeholder="Họ và tên" value="<?php echo $row['Tên KH']?>">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="idlog" class="form-input" value="<?php echo $row['Tên đăng nhập']?>" placeholder="Tên đăng nhập" >
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name ="pass" class="form-input" value="<?php echo $row['Mật khẩu']?>" placeholder="Mật khẩu">
                <div class= "eye1" id="eye1">
                <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" value="<?php echo $row['Mật khẩu']?>" placeholder="Nhập lại mật khẩu">
                <div class= "eye2" id="eye2">
                <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name ="email" class="form-input" value="<?php echo $row['Email']?>" placeholder="Email" >
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="number" name ="sdt" class="form-input" value="<?php echo $row['SĐT']?>" placeholder="SĐT" >
            </div>

            <div class="form-group">
                <i class="fas fa-passport"></i>
                <input type="number" name ="cccd" class="form-input" value="<?php echo $row['CCCD']?>" placeholder="CCCD" >
            </div>
            <div class="form-se">
                <label for="">Giới tính</label>
            </div>
            <div class="form-check-inline1">
                <input class="form-check-input1" type ="radio" name="gioitinh" checked id="male" value="Nam">
                <label class = "form-check-label1" for ="Nam" >Nam <i class="fa fa-mars" aria-hidden="true"></i></label> 
            </div>
            <div class="form-check-inline2">
                <input class="form-check-input2" type ="radio" name="gioitinh" checked id="female" value="Nữ">
                <label class = "form-check-label2" for ="Nữ" ><i class="fa fa-venus" aria-hidden="true"></i> Nữ</label> 
            </div>
            
            <button href="QLKhachhang.php" type="submit" name="submit" class="dangki" > Sửa khách hàng </button>
            <a class="dangnhap"href='../Admin/QLKhachhang.php'> Trở lại quản lí khách hàng </a>
            <a class="tieptuc" href='../Admin/Admin.php'> Vào trang quản trị </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>