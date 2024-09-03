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
$sql = "INSERT INTO tb_phanquyen(`Mã phân quyền`, `Tên vai trò`) 
            VALUES  ('0','CEO'),
                    ('1','Quản lý trang khách sạn,
                    Quản lý nhân viên,
                    Quản lý khách hàng,
                    Quản lý nhà cung cấp,
                    Quản lý các thiết bị,
                    Quản lý thu chi,
                    Quản lý phần chạy quảng cáo khách sạn,
                    Thay đổi giá món, nước uống,
                    Thêm sửa order món ăn, nước uống,
                    Thêm sửa xóa danh mục kho,
                    Thêm sửa Khuyến mãi, dịch vụ, hóa đơn,
                    Thêm, sửa, thu chi,
                    Xem ví điều chỉnh số dư'),
                    ('2','Chọn nhân viên khi khách order món ăn,
                    nước uống, Kiểm kê kho'),
                    ('3','Cho phép in phiếu tạm tính, Hiển thị lịch sử đơn'),
                    ('4','Bảo trì trang thiết bị, Thêm bớt trang thiết bị, Đầu bếp, Phụ bếp, Phục vụ, Dọn dẹp phòng')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>