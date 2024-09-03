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
$sql = "INSERT INTO tb_khachhang(`Mã KH`,`Tên KH`,`Tên đăng nhập`,`Mật khẩu`,`SĐT`,`Email`,`CCCD`,`Giới tính`,`Điểm tích lũy`) 
            VALUES  ('01','Phạm Việt Hải','pvh123','123456789','907835144','hai@123.gmail.com','1001999901','Nam','0'),
            ('02','Võ Hoàng Quân','vhq123','123456788','938100552','quan@123.gmail.com','1001999902','Nam','0'),
            ('03','Nguyễn Thị Diệu Thảo','ntdt123','123456787','990998764','Thao@123.gmail.com','1001999903','Nữ','0'),
            ('04','Nguyễn Đoàn Hồng Sơn','ndhs123','123456786','913723223','Son@123.gmail.com','1001999904','Nam','0'),
            ('05','Nguyễn Thanh Hoa','nth123','123456785','909232169','hoa@123.gmail.com','1001999905','Nữ','0'),
            ('06','Võ Việt Hương','vvh123','123456784','987564789','huong@123.gmail.com','1001999906','Nữ','0'),
            ('07','Nguyễn Thị Phương Thảo','ntpt123','123456783','947435754','thao@123.gmail.com','1001999907','Nữ','0'),
            ('08','Tạ Cộng Hòa','tch123','123456782','919219377','hoa@123.gmail.com','1001999908','Nam','0'),
            ('09','Đặng Thị Thu Trang','dttt123','123456781','834476819','trang@123.gmail.com','1001999909','Nữ','0'),
            ('10','Đào Thị Hồng','dth123','123456780','78513579','hong@123.gmail.com','1001999910','Nữ','0'),
            ('11','Phạm Hoàng Việt','phv123','123456779','987569977','viet@123.gmail.com','1001999911','Nam','0'),
            ('12','Nguyễn Công Dung','ncd2123','123456778','926472689','dung@123.gmail.com','1001999912','Nam','0'),
            ('13','Trần Vân Anh','tva123','123456777','912345678','anh@123.gmail.com','1001999913','Nam','0'),
            ('14','Trần Khánh Linh','tkl123','123456776','978945612','linh@123.gmail.com','1001999914','Nữ','0'),
            ('15','Nguyễn Kim Bằng','nkb123','123456775','978945613','bang@123.gmail.com','1001999915','Nữ','0'),
            ('16','Nguyễn Anh Đức','nad123','123456774','978945614','duc@123.gmail.com','1001999916','Nam','0'),
            ('17','Nguyễn Khánh Như','nkn123','123456773','978945615','nhu@123.gmail.com','1001999917','Nữ','0'),
            ('18','Lê Anh Đức','lad123','123456772','978945616','duc@123.gmail.com','1001999918','Nam','0'),
            ('19','Ngô Thị Thoa','ntt123','123456771','978945617','thoa@123.gmail.com','1001999919','Nữ','0'),
            ('20','Trần Công Chiến','tcc123','123456770','978945618','chien@123.gmail.com','1001999920','Nam','0'),
            ('21','Phan Thanh Sang','pts123','123456769','978945619','sang@123.gmail.com','1001999921','Nam','0'),
            ('22','Cao Văn Bình','cvb123','123456768','978945620','bang@123.gmail.com','1001999922','Nam','0'),
            ('23','Đỗ Kim Kha','dkk123','123456767','978945621','kha@123.gmail.com','1001999923','Nữ','0'),
            ('24','Trương Đức Việt','tdv123','123456766','978945622','viet@123.gmail.com','1001999924','Nam','0'),
            ('25','Mai Thanh Hà','mth123','123456765','978945623','ha@123.gmail.com','1001999925','Nữ','0'),
            ('26','Vũ Hoàng Khải Đăng','vhkd123','123456764','978945624','hai@123.gmail.com','1001999926','Nam','0'),
            ('27','Phạm Khánh Huyền','pkh1233','123456763','978945625','chi@123.gmail.com','1001999927','Nữ','0')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>