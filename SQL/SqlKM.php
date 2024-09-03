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
$sql = "INSERT INTO tb_ctkhuyenmai(`Mã KM`,`Tên KM`,`Chi tiết KM`,`Mã LP`,`Ngày bắt đầu`,`Ngày kết thúc`)
            VALUES  ('136136','We1com3 2 1ề 19ừ0n6 1uxury','Khuyến mãi lần đầu tạo tài khoản thành viên giảm giá 45% lần đầu đăng kí phòng','KE','2023/10/20','2023/12/20'),
            ('500321','Tin tưởng của khách hàng là nhất!','Khuyến mãi giảm giá 30% các dịch vụ: Giặt ủi quần áo, Ăn uống buffet, Fitness center trong 1 ngày','KB','2024/6/1','2024/6/5'),
            ('500344','Chán quá thì làm gì?','Khuyến mãi giảm giá 20% 1 dịch vụ: Hồ bơi hoặc Karaoke trong 1 ngày','KE','2023/6/21','2023/7/20'),
            ('211269','Sợ 1 mình? Đã có gia đình!','Khuyến mãi giảm giá 10% đối với các loại phòng gia đình trong 4 ngày','KC','2022/12/29','2023/1/2'),
            ('503344','Có cặp có đôi 2O20+1','Khuyến mãi 5% đối với các loại phòng đôi khi thanh toán','KD','2021/2/14','2021/2/15'),
            ('504411','Có cặp có đôi 2OXII','Khuyến mãi 5% đối với các loại phòng đôi khi thanh toán','KD','2022/2/14','2022/2/15'),
            ('505505','Có cặp có đôi 2O2Ba','Khuyến mãi 5% đối với các loại phòng đôi khi thanh toán','KD','2022/2/14','2023/2/15'),
            ('506844','Ra là bạn chưa có bằng lái','Khuyến mãi dịch vụ Xe đưa đón 10% trong 2 ngày','KE','2023/8/3','2023/8/8'),
            ('507555','Đừng chê bạn “Sang”','Khuyến mãi 5% đối với loại phòng sang khi thanh toán','KA','2022/9/1','2022/9/3'),
            ('508923','Có đôi thì hay đó nhưng gia đình thì sao?','Khuyến mãi 5% đối với loại phòng gia đình trong 3 ngày','KC','2022/5/25','2022/5/29'),
            ('509905','Nghe nói bạn đói','Khuyến mãi 20% trong vòng 15 ngày Ăn uống buffet thỏa thích','KE','2021/11/20','2021/11/30'),
            ('510876','Yasss slay','Khuyến mãi 5% đối với phòng hạng sang khi thanh toán hóa đơn','KAA','2022/12/15','2022/12/28'),
            ('514687','Giảm giá mùa Worldcup','Khuyến mãi 5% đối với tất cả các phòng và tất cả các dịch vụ khi thanh toán','KE','2022/12/1','2022/12/19'),
            ('517223','Năm mới? Năm mới!','Khuyến mãi 5% đối với các phòng tiêu chuẩn khi thanh toán','KB','2023/1/1','2023/1/23'),
            ('502412','Noe1 cùng Streetside Lux','Khuyến mãi 5% đối với các phòng tiêu chuẩn, phòng gia đình và phòng đôi khi thanh toán','KB, KC, KD','2022/11/1','2022/12/26')";
if(mysqli_query($connect,$sql)){
    echo "Nhập dữ liệu thành công!";
}else {
    echo "Lỗi!".mysqli_error();
}
?>