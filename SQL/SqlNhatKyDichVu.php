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
$sql = "INSERT INTO tb_nhatkydv(`Mã NKDV`,`Mã DV`,`Đơn giá DV`)
            VALUES  ('1','2-3-7-8','14.580.000 VNĐ'),
                    ('2','2-4-5-8','7.793.000 VNĐ'),
                    ('3','2-3','6.291.000 VNĐ'),
                    ('4','9','5.698.000 VNĐ'),
                    ('5','1-4-8','3.020.000 VNĐ'),
                    ('6','2-3-8','4.087.000 VNĐ'),
                    ('7','1','910.000 VNĐ'),
                    ('8','9','1.300.000 VNĐ'),
                    ('9','1-2','200.000 VNĐ'),
                    ('10','8','4.327.000 VNĐ'),
                    ('11','9','2.212.000 VNĐ'),
                    ('12','1-7','3.054.000 VNĐ'),
                    ('13','9','5.450.000 VNĐ'),
                    ('14','3-6-7','1.507.000 VNĐ'),
                    ('15','4','3.403.000 VNĐ'),
                    ('16','1-2-3-6','1.990.000 VNĐ'),
                    ('17','1-3-5-7','1.220.000 VNĐ')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>