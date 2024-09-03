<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include_once("../control/Control.php");
$control_dp = new Control();
$control_dp->Thuedichvu();
echo "<script> alert('Đã cập nhật dịch vụ muốn thuê!');history.back();</script>";
echo "<script language='javascript'>alert('Đã cập nhật phòng theo dõi!'); location.href='Dichvu.php'";
?>