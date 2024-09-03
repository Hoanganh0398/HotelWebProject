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
$sql = "INSERT INTO tb_dichvu(`Mã DV`,`Tên DV`,`Loại DV`,`Giá DV`)
            VALUES  ('1','DV Giặt ủi quần áo','cơ bản','50.000/ngày'),
                    ('2','DV Xe đưa đón','cơ bản','100.000/ngày'),
                    ('3','DV Hồ bơi','cao cấp','75.000/ngày'),
                    ('4','DV Karaoke','cao cấp','300.000/ngày'),
                    ('5','DV Spa','cao cấp','500.000/ngày'),
                    ('6','DV Ăn uống buffet','cơ bản','500.000/ngày'),
                    ('7','DV Fitness center','cơ bản','50.000/ngày'),
                    ('8','DV Đặt vé máy bay','cơ bản','1.500.000/vé'),
                    ('9','DV Bao gói','cao cấp','2.800.000/ngày'),
                    ('010','DV món ăn (new)','cơ bản','50.000/1 món'),
                    ('011','DV nước uống (new)','cơ bản','20.000/1 loại nước'),
                    ('012','DV bia/rượu (new)','cao cấp','500.000/1 loại bia hoặc rượu')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!". $mysqli_connect_error;
}
?>