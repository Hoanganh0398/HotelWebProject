<?php
$server ="localhost";
$username ="root";
$password="";
$dbname = "hotel";
$connect = mysqli_connect($server,$username,$password,$dbname);
if (!$connect){
  echo "Kết nối thất bại" . $mysqli_connect_error;
  exit();
}
$sql = "INSERT INTO tb_danhmucloaiphong(`Mã LP`,`Loại Phòng`) 
VALUES  ('KS','Phòng cao cấp'),
        ('KA','Phòng sang'),
        ('KB','Phòng tiêu chuẩn'),
        ('KC','Phòng gia đình'),
        ('KD','Phòng đôi'),
        ('KE','Tất cả phòng')";
if(mysqli_query($connect,$sql)){
echo "Nhập dữ liệu thành công!";
}else {
echo "Lỗi!".mysqli_error();
}

?>