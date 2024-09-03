<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include_once("../control/Control.php");
$control_dp = new Control();
$control_dp->Themphongtheodoi();
echo "<script> alert('Đã cập nhật phòng theo dõi!');history.back();</script>";
echo "<script language='javascript'>alert('Đã cập nhật phòng theo dõi!'); location.href='datphong_theodoi.php'";
?>