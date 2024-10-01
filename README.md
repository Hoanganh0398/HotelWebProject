# HotelWebProject
1. Trang chủ:
- Vào folder Trangchu, vào trang index.php, ở trang index, một số nội dung không chuyển trang mà chỉ cuộn xuống.
- Vào form đăng nhập(tk: le123, mk:123), có thể đăng ký nếu chưa có tài khoản thành viên, form đăng ký bắt buộc phải điền đầy đủ tên tài khoản và mật khẩu, không được sử dụng tên tài khoản đã có trong database.
- Sau khi đăng nhập vào trang chủ, có thể thao tác với các trang theo dõi đặt phòng và thanh toán đặt phòng, có thể tìm kiếm phòng theo tên, theo danh mục hoặc theo mã phòng.
- Biểu tượng trái tim ở các phòng có chức năng bỏ theo dõi.
- Ấn vào ảnh của phòng để xem thêm về chi tiết phòng.
- Sau khi theo dõi phòng, có thể vào trang theo dõi trên ô người dùng để xem những phòng mình đã theo dõi, không được theo dõi lại phòng đã được theo dõi.
- Ấn vào thành tiền để xem tổng tiền, sau đó quyết định đặt phòng hoặc quay trở lại tiếp tục theo dõi.
- Xem kĩ thông tin cá nhân -> Điền đầy đủ thông tin vào form.
- Sau khi đặt hàng thành công, có thể kiểm tra lại đơn đặt phòng của mình ở phần thanh toán ở ô người dùng, ở phần này khách hàng có thể tiếp tục xem chi tiết đơn đặt phòng hoặc hủy, nếu hủy đơn đặt phòng thì phòng sẽ từ trạng thái Đang sử dụng trở về Sẵn sàng.
![image](https://github.com/user-attachments/assets/f2451018-5e91-4b88-8fc2-134e6e68c162)
2. Trang Admin: - Vào folder Admin -> Admin. - Trang chủ Admin bắt buộc đăng nhập.(tk: anh123, mk: 1234)
- Có chức năng phân quyền ở các trang quản lí, phân quyền cao nhất là 0, phân quyền cấp 3 sẽ bị hạn chế ở một số trang (tk: vhl123,mk: 1234), phân quyền cấp 2,4 chỉ có thể vào trang chủ Admin (tk: dnq123, mk: 1234), những tài khoản không có phân quyền thì không vào được trang quản lí.
- Các trang quản lí đều xuất đầy đủ danh sách và chức năng thêm(+), sửa, xóa được để ở dạng icon, thêm là (+), sửa là bút, xóa là thùng rác.
Thêm: ![image](https://github.com/user-attachments/assets/1b7394a1-8edf-4283-a10d-47cf5f8db6e3)
Sửa, Xóa:![image](https://github.com/user-attachments/assets/7da0694d-c264-434f-85b9-64d62de3b90d)
