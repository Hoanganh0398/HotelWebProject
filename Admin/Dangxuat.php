<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();
if(isset($_GET['id']))
        {   
           unset($_SESSION['idNV']);
           unset($_SESSION['name']);
           unset($_SESSION['fullname']);
           unset($_SESSION['sdt']);
           unset($_SESSION['gioitinh']);
           unset($_SESSION['ngaysinh']);
           unset($_SESSION['quequan']);
           unset($_SESSION['chucvu']);
           unset($_SESSION['role']);
        header("Location:Dangnhap.php");
    }
?>