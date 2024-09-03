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
$sql = "INSERT INTO tb_phong(`Mã Phòng`,`Tên Phòng`,`Mã LP`,`Giá Phòng (Ngày)`,`Mô tả`,`Hình ảnh`) 
            VALUES  ('A001','Deluxe Room 101','KA','1500000','Sẵn sàng','phongdex101.png'),
                    ('A002','Deluxe Room 102','KA','1500000','Đang sử dụng','phongdex102.png'),
                    ('A003','Superior Room 201','KB','1200000','Sẵn sàng','phong1.png'),
                    ('A004','Superior Room 202','KB','1200000','Đang sửa chữa','phong2.png'),
                    ('A005','Suite Room 301','KS','2000000','Sẵn sàng','phongsuite301.png'),
                    ('A006','Suite Room 302','KS','2000000','Sẵn sàng','phongsuite302.png'),
                    ('A007','Family Room 401','KC','1800000','Sẵn sàng','phongf401.png'),
                    ('A008','Family Room 402','KC','1800000','Đang sửa chữa','phongf402.png'),
                    ('A009','Twin Room 501','KD','1300000','Sẵn sàng','phongtw501.png'),
                    ('A010','Twin Room 502','KD','1300000','Sẵn sàng','phongtw502.png'),
                    ('A011','Deluxe Room 103','KA','1500000','Sẵn sàng','phongdex103.png'),
                    ('A012','Deluxe Room 104','KA','1500000','Đang sử dụng','phongdex104.png'),
                    ('A013','Superior Room 203','KB','1200000','Sẵn sàng','phong3.png'),
                    ('A014','Superior Room 204','KB','1200000','Đang sửa chữa','phong4.png'),
                    ('A015','Suite Room 303','KS','2000000','Sẵn sàng','phongsuite303.png'),
                    ('A016','Suite Room 304','KS','2000000','Sẵn sàng','phongsuite304.png'),
                    ('A017','Family Room 403','KC','1800000','Sẵn sàng','phongf403.png'),
                    ('A018','Family Room 404','KC','1800000','Đang sửa chữa','phongf404.png'),
                    ('A019','Twin Room 503','KD','1300000','Sẵn sàng','phongtw503.png'),
                    ('A020','Twin Room 504','KD','1300000','Sẵn sàng','phongtw504.png'),
                    ('A021','Deluxe Room 105','KA','1500000','Sẵn sàng','phongdex105.png'),
                    ('A022','Deluxe Room 106','KA','1500000','Đang sử dụng','phongdex106.png'),
                    ('A023','Superior Room 205','KB','1200000','Sẵn sàng','phong5.png'),
                    ('A024','Superior Room 206','KB','1200000','Đang sửa chữa','phong6.png'),
                    ('A025','Suite Room 305','KS','2000000','Sẵn sàng','phongsuite305.png'),
                    ('A026','Suite Room 306','KS','2000000','Sẵn sàng','phongsuite306.png'),
                    ('A027','Family Room 405','KC','1800000','Sẵn sàng','phongf405.png'),
                    ('A028','Family Room 406','KC','1800000','Đang sửa chữa','phongf406.png'),
                    ('A029','Twin Room 505','KD','1300000','Sẵn sàng','phongtw505.png'),
                    ('A030','Twin Room 506','KD','1300000','Sẵn sàng','phongtw506.png')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>