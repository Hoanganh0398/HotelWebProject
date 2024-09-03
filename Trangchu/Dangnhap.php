<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
include_once('../control/Control.php');
$control = new control();
$result=$control->DangNhap();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../css/Dangnhap.css" type="text/css">
    <title>Form Đăng nhập</title>
</head>
<body>
    <div id="wrapper">
        <form action="" id="form-login" method="post">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="id" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="pass" class="form-input" placeholder="Mật khẩu">
                <div id="eye1">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            
            <button type="submit" class="dangnhap" name="dangnhap" > Đăng nhập </button>
            <a type="submit" class="dangki"  href='Dangki.php'> Đăng kí </a>
            <a type="submit" class="tieptuc" href='../TrangchuC/index.php'> Vào trang chủ </a>
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>