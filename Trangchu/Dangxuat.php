<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();
if(isset($_GET['id']))
        {   
            unset($_SESSION['idKH']);
            unset($_SESSION['name']);
            unset($_SESSION['fullname']);
            unset($_SESSION['sdt']);
            unset($_SESSION['email']);
        header("Location:Dangnhap.php");
    }
?>