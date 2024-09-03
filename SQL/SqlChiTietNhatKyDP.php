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
$sql = "INSERT INTO tb_chitietnkdp(`Mã NKDP`,`Mã Phòng`,`Đơn giá phòng`) 
            VALUES  ('KA02','A011','87.912.000 VNĐ'),
                    ('KA01','A021','51.688.000 VNĐ'),
                    ('KB05','A003','55.831.000 VNĐ'),
                    ('KS2','A026','47.285.000 VNĐ'),
                    ('KB04','A003','11.516.000 VNĐ'),
                    ('KC05','A007','20.114.000 VNĐ'),
                    ('KB03','A013','4.832.000 VNĐ'),
                    ('KD06','A029','34.300.000 VNĐ'),
                    ('KD05','A010','6.092.000 VNĐ'),            
                    ('KB02','A013','500.000 VNĐ (tiền cọc)'),
                    ('KC04','A007','3.019.000 VNĐ'),
                    ('KC03','A017','29.082.000 VNĐ'),
                    ('KC02','A027','5.632.000 VNĐ'),
                    ('KB01','A023','32.239.000 VNĐ'),
                    ('KD04','A030','44.279.000 VNĐ'),
                    ('KS1','A005','19.993.000 VNĐ'),
                    ('KC01','A027','10.122.000 VNĐ'),
                    ('KD03','A019','34.726.000 VNĐ'),
                    ('KD02','A009','10.452.000 VNĐ'),
                    ('KD01','A020','9.801.000 VNĐ')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>