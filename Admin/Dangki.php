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
    <title>Form Đăng kí</title>
</head>

<?php
include_once('../control/Control.php');
$control = new control();
$result=$control->DangKy(); 
?>
<body>
    <div id="wrapper">
        <form id="form-reg" class ="reg" action="" method="post" >
            <h1 class="form-heading">Đăng kí</h1>
            <div class="form-group">
            <i class="fa fa-id-card" aria-hidden="true"></i>
                <input type="text" name ="name" class="form-input" placeholder="Họ và tên" id="Tên KH">
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name ="id" class="form-input" placeholder="Tên đăng nhập" id="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name ="pass" class="form-input" placeholder="Mật khẩu" id="Mật khẩu">
                <div class= "eye1" id="eye1">
                <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name ="passR" class="form-input" placeholder="Nhập lại mật khẩu" id="Mật khẩu">
                <div class= "eye2" id="eye2">
                <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name ="email" class="form-input" placeholder="Email" id="Email">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="number" name ="sdt" class="form-input" placeholder="SĐT" id="SĐT">
            </div>

            <div class="form-group">
                <i class="fas fa-passport"></i>
                <input type="passport" name ="cccd" class="form-input" placeholder="CCCD" id="CCCD">
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
            
            <button href="index.php" type="submit" name="submit" class="dangki" > Đăng kí </button>
            <a class="dangnhap"href='Dangnhap.php'> Trở lại đăng nhập </a>
            <a class="tieptuc" href='../TrangchuC/index.php'> Vào trang chủ </a>
        </form>
    </div>

</body>
<link src="https://code.jquery.com/jquery-3.6.0.js"></link>
<link src="js/app.js"></link>
</html>