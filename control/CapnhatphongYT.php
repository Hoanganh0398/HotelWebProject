<?php
session_start();
 
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$quantity = isset($_GET['soluongphong']) ? $_GET['soluongphong'] : "";
 
$soluongphong=$soluongphong<=0 ? 1 : $soluongphong;
 
unset($_SESSION['id'][$id]);
 
$_SESSION['ip'][$id]=array(
    'soluongphong'=>$soluongphong
);
 
header('Location: datphong_yeuthich.php?action=datphong&id=' . $id);
?>