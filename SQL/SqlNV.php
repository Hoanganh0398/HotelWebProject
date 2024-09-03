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
$sql = "INSERT INTO tb_nhanvien(`Tên NV`,`Tên đăng nhập`,`Mật khẩu`,`SĐT`,`Giới tính`,`Ngày sinh`,`Quê quán`,`Chức vụ`,`Mã phân quyền`) 
            VALUES  ('Ánh Ngọc Hoàng','anh123','1234','0830265982','Nữ','2003/11/29','TP HCM','Chủ cửa hàng','0'),
                    ('Huệ Quan Zân','hqv123','1234','0783569211','Nam','2002/09/09','TP HCM','Quản lý','1'),
                    ('Cao Huy Nguyễn','chn123','1234','0320195262','Nữ','2003/02/28','TP HCM','Quản lý','1'),
                    ('Nguyễn Thiên Ân','nta123','1234','0892013923','Nữ','2003/12/02','TP HCM','Nhân viên kỹ thuật','2'),
                    ('Dũy Khang Quách','dkq123','1234','0947345754','Nữ','2003/07/26','TP HCM','Nhân viên kỹ thuật','2'), 
                    ('Văn Nguyễn Quý','vnq123','1234','0881294837','Nữ','2003/02/12','TP HCM','Quản lý','1'),
                    ('Võ Hiếu Lê','vhl123','1234','0835148407','Nữ','2003/04/15','TP HCM','Quản lý','1'),
                    ('Dũng Lý Chí','dcl123','1234','0375002936','Nam','2000/05/20','TP HCM', 'Quản lý','1'),
                    ('Nguyễn Ngọc Hoàng','nnh123','1234','0886000103','Nữ','1997/07/19','Vĩnh Long','Quản lý','1'),
                    ('Lý Kim Long','llk123','1234','09010375314','Nam','2000/01/21','Hà Nội','Bảo vệ','4'),
                    ('Nguyễn Thị Ngọc Thảo','nnt123','1234','09527756852','Nữ','1995/05/05','Hà Nội','Nhân viên','3'),
                    ('Nguyễn Khánh Nguyệt','nkn123','1234','0957443612','Nữ','1998/06/27','TP HCM','Lễ Tân','3'),
                    ('Phạm Thanh Trúc','ptt123','1234','0933695144','Nữ','2001/07/15','Hà Nội','Lễ Tân','3'),
                    ('Hà Văn Cường','hvc123','1234','0834476918','Nam','1991/05/16','Thanh Hóa','Nhân Viên','3'),
                    ('Nguyễn Thanh Bình','ntb123','1234','098754577','Nam','1983/07/26','Đồng Nai','Nhân Viên','3'),
                    ('Trần Thị Phương','ttp123','1234','0886000203','Nữ','2000/12/22','Cần Thơ','Nhân viên','3'),
                    ('Lê Việt Anh','lva123','1234','0886001973','Nam','1988/05/17','Thanh Hóa','Bảo vệ','4'),
                    ('Nguyễn Văn Dương','nvd123','1234','0886010033','Nam','1987/08/06','Hà Tĩnh','Bảo vệ','4'),
                    ('Võ Văn Cường','vvc123','1234','0886013443','Nam','1996/12/30','Bình Dương','Nhân viên vệ sinh','4'),
                    ('Nguyễn Kim Cương','nkc123','1234','0909112352','Nữ','1999/05/01','Thanh Hóa','Nhân viên vệ sinh','4'),
                    ('Lưu Ý Hoa','lyh123','1234','0522323156','Nữ','2000/04/04','TP HCM','Nhân viên','3'),
                    ('Lý Công Bằng','lcb123','1234','09876682232','Nam','1997/02/03','Long An','Nhân viên','3'),
                    ('Lữ Thiên Văn','ltv123','1234','06653782911','Nam','1992/06/27','Đồng Nai','Nhân viên','3'),
                    ('Trần Điệp Lan','tdl123','1234','0702211657','Nữ','1996/02/18','Thanh Hóa','Nhân viên','3'),
                    ('Lục Mỹ Ngân','lmn123','1234','07332345925','Nữ','1995/06/15','TP HCM','Lễ Tân','3'),
                    ('Thiên Họa Tuân','tht123','1234','0501023587','Nam','1993/12/08','Cần Thơ','Nhân viên','3'),
                    ('Lý Bách Diệp','lbd123','1234','0902253587','Nam','1994/11/11','Đắk Nông','Nhân viên','3')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>