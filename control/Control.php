<?php
//session_start() ;
require_once ("Connect.php");
class Control extends connect
{
    function lay_phong($sophong,$p) //khai báo biến số phòng và thứ tự của trang
    {
        $x=($p-1)*$sophong; //công thức phân trang, tính ra số trang cần dùng để chia đều số phòng ($sophong) trong 1 trang
        $sql = "Select * from tb_phong limit $x,$sophong"; //chọn tất cả từ CDSL tb_phong, giới hạn bằng số phòng chia đều cho số trang($x)
        $result = $this->conn->query($sql);// truy vấn đến CSDL thông qua đối tượng $this -> conn
        return $result;
    }
    function PhantrangPhong($sophong,$p){
        $sql= "Select * from tb_phong";
        $result = $this->conn->query($sql);// truy vấn đến CSDL thông qua đối tượng $this -> conn
        $tongsotrang = (ceil(($result->num_rows)/$sophong));//tính tổng số trang theo số hàng đếm được từ CSDL, hàm ceil dùng để làm tròn số
        echo '<ul class="nutphantrang">';
        // Hiển thị số phân trang
        echo '<div class="sotrang">'; // dùng html thông qua php
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){// vòng lặp for chứa biến i đi từ 1 cho đến tổng số trang, i ở đây là trang hiện tại, vd bạn đang ở trang 1 thì i=p, tức i=1
                echo '<a class=button2 href="../TrangchuC/Danhmucphong.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a class=button2 href="../TrangchuC/Danhmucphong.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
    }
    function lay_ctphong($id)
    {
        $sql = "Select * from tb_phong where Mã Phòng like '%$id%'";//chọn từ tb_phong dữ liệu có mã phòng = với biến id
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_ctphongdat($id)
    {
        global $conn;
        $sql = "Select * from tb_phong where Mã Phòng like '%$id%'";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($query);
        return $result;
    
    }

    function lay_dmlp()
    {
        $sql = "Select * from tb_danhmucloaiphong";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dmtlp($sophong,$p)
    {
        $x=($p-1)*$sophong;
        if (isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "Select * from `tb_phong` where `Mã LP` like '%$id%' limit $x,$sophong";
        $result = $this->conn->query($sql);
        return $result;
    }
}
    function PhantrangDSPhong($sophong,$p){
        if (isset($_GET['id'])){
            $id=$_GET['id'];
        $sql_pt= "Select * from tb_phong where `Mã LP` like '%$id%'";
        $result = $this->conn->query($sql_pt);
        $tongsotrang = (ceil(($result->num_rows)/$sophong));
        echo '<ul class="nutphantrang">';
        // Hiển thị số phân trang
        echo '<div class="sotrang">';
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){
                echo '<a class=button2 href="../view/Chiadanhmuc.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a class=button2 href="../view/Chiadanhmuc.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
}
    }    
    function timkiemphong($id,$sophong,$p)
    {
        $x=($p-1)*$sophong;
        $sql = "Select * from `tb_phong` where `Tên Phòng` like '%$id%' OR `Mã Phòng` like '%$id%'  OR `Mã LP` like '%$id%' OR `Mô tả` like '%$id%' limit $x,$sophong";
        $result = $this->conn->query($sql);
        return $result;
    }
    function Phantrangtimkiemphong($sophong,$p)
    {
        if (isset ($_POST["id"]))
        {
            $id=$_POST['id'];
            $sql = "Select * from `tb_phong` where `Tên Phòng` like '%$id%' OR `Mã Phòng` like '%$id%'  OR `Mã LP` like '%$id%' OR `Mô tả` like '%$id%'";
            $result = $this->conn->query($sql);
            if($result->num_rows<=0)
                echo "Không tìm thấy phòng";
        else
        {
        $tongsotrang = (ceil(($result->num_rows)/$sophong));
        echo '<ul class="nutphantrang">';
        //Hiển thị số phân trang
        echo '<div class="sotrang">';
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){
                echo '<a class=button2 href="../TrangchuC/Danhmucphong.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a class=button2 href="../TrangchuC/Danhmucphong.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
    } 
        }
    }
    function CapNhatTrangThaiPhong($idphong)
    {
        $sql = "UPDATE tb_Phong SET `Mô tả`='Đang sử dụng' WHERE id=$idphong";
        $result = $this->conn->query($sql);
    }

    //Admin----------------------------------------------
    function DangNhapAdmin()
    {
        if (isset($_POST['dangnhap'])) 
        {
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        //if (!$id || !$pass) {
       // }
         
        $sql = "SELECT * FROM tb_nhanvien WHERE `Tên đăng nhập`='$id'";
        $result = $this->conn->query($sql);
        if ($result -> num_rows == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;       
        }
        
        $row = $result->fetch_assoc();
        if ($pass == $row['Mật khẩu']) {
        $_SESSION['idNV'] = $row['Mã NV'];
        $_SESSION['name'] = $row['Tên đăng nhập'];
        $_SESSION['fullname'] = $row['Tên NV'];
        $_SESSION['sdt']= $row['SĐT'];
        $_SESSION['gioitinh']= $row['Giới tính'];
        $_SESSION['ngaysinh']= $row['Ngày sinh'];
        $_SESSION['quequan']= $row['Quê quán'];
        $_SESSION['chucvu']= $row['Chức vụ'];
        $_SESSION['role']= $row['Mã phân quyền'];
        echo "Xin chào " . $id . ". Bạn đã đăng nhập thành công. <a href='../Admin/Admin.php'>Về trang chủ</a>";
        die();
        }
        else
        { 
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    }
    }
    function lay_dsnv()
    {
        $sql = "Select * from tb_nhanvien";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    function lay_dskh()
    {
        $sql = "Select * from tb_khachhang";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dskm()
    {
        $sql = "Select * from tb_ctkhuyenmai";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dsdv()
    {
        $sql = "Select * from tb_dichvu";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dspq()
    {
        $sql = "Select * from tb_phanquyen";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dsnkdp()
    {
        $sql = "Select * from tb_nhatkydatphong";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_dsnkdv()
    {
        $sql = "Select * from tb_nhatkydv";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    function lay_dsnkhp()
    {
        $sql = "Select * from tb_nhatkydatphong where `Ghi chú`='Khách đã hủy đặt phòng'";
        $result = $this->conn->query($sql);
        return $result;
    }
    function DangKy()
    {
        $name = "";
        $id="";
        $pass = "";
        $passR ="";
        $email = "";
        $sdt = "";
        $cccd = "";
        $gioitinh = "";
    if(isset($_POST["submit"])) 
    { 
        $name = $_POST['name']; 
        $id = $_POST['id']; 
        $pass = $_POST['pass'];
        $passR = $_POST['passR'];
        $email = $_POST['email']; 
        $sdt = $_POST['sdt']; 
        $cccd = $_POST['cccd']; 
        $gioitinh = $_POST['gioitinh']; 
       
        if (!$id || !$pass ) {
            ?>
            <div class="canhbao show">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg">Đăng kí không thành công</span>
            <button class="nut-dong">
                <span class="fas fa-times"></span>
            </button>
              </div>
        <?php
        }
        else {
            
        $sql = "Select * from tb_khachhang where `Tên đăng nhập`='$id'";
        $result = $this->conn->query($sql);
        if ($result -> num_rows != 0) {
            ?> 
        <div class="canhbao show">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Tên đăng nhập đã tồn tại</span>
        <button class="nut-dong">
            <span class="fas fa-times"></span>
        </button>
          </div>
        <?php
        }
        else {
        if ($pass != $passR){
            ?> 
        <div class="canhbao show">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Mật khẩu không giống nhau</span>
        <button class="nut-dong">
            <span class="fas fa-times"></span>
        </button>
          </div>
        <?php
        }
        else {
        $sql = "INSERT INTO tb_khachhang (`Tên KH`,`Tên đăng nhập`,`Mật khẩu`,`SĐT`,`Email`,`CCCD`,`Giới tính`,`Điểm tích lũy`)
        VALUES ('$name','$id','$pass','$sdt', '$email','$cccd','$gioitinh',0)";
        $result = $this->conn->query($sql);
       
        if ($result) {
            ?> 
        <div class="canhbao show tc">
        <span class="fas fa-exclamation-circle tc">
        </span>
        <span class="msg">Đăng kí thành công</span>
        <button class="nut-dong">
            <span class="fas fa-times"></span>
        </button>
          </div>
        <?php
       
        } 
    }
    } 
}
}
    }

    //Đã đăng nhập----------------------------
    
    function DangNhap()
    {
        if (isset($_POST['dangnhap'])) 
        {
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        //if (!$id || !$pass) {
       // }
         
        $sql = "SELECT * FROM tb_khachhang WHERE `Tên đăng nhập`='$id'";
        $result = $this->conn->query($sql);
        if ($result -> num_rows == 0) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;       
        }
        
        $row = $result->fetch_assoc();
        if ($pass == $row['Mật khẩu']) {
        $_SESSION['idKH'] = $row['Mã KH'];
        $_SESSION['name'] = $row['Tên đăng nhập'];
        $_SESSION['fullname'] = $row['Tên KH'];
        $_SESSION['sdt']= $row['SĐT'];
        $_SESSION['email']= $row['Email'];
        $_SESSION['cccd']= $row['CCCD'];
        $_SESSION['dtl']= $row['Điểm tích lũy'];
        echo "Xin chào " . $id . ". Bạn đã đăng nhập thành công. <a href='../Trangchu/Trangchu.php'>Về trang chủ</a>";
        die();
        }
        else
        { echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    }
    }
    //Hàm kiểm tra đăng nhập
    function LayTTDangNhap($str)
    {
        $idlog = $str;
        $sql="Select * from tb_khachhang where `Mã KH`='$idlog'";
        $result = $this->conn->query($sql);
        return $result;
    }
    function lay_phong1($sophong,$p)
    {
        $x=($p-1)*$sophong;
        $sql = "Select * from tb_phong limit $x,$sophong";
        $result = $this->conn->query($sql);
        return $result;
    }
    function PhantrangPhong1($sophong,$p){
        $sql= "Select * from tb_phong";
        $result = $this->conn->query($sql);
        $tongsotrang = (ceil(($result->num_rows)/$sophong));
        echo '<ul class="nutphantrang">';
        // Hiển thị số phân trang
        echo '<div class="sotrang">';
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){
                echo '<a  class=button2 href="../Trangchu/Danhmuc.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a  class=button2 href="../Trangchu/Danhmuc.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
    }
    function lay_dmtlp1($sophong,$p)
    {
        $x=($p-1)*$sophong;
        if (isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "Select * from `tb_phong` where `Mã LP` like '%$id%' limit $x,$sophong";
        $result = $this->conn->query($sql);
        return $result;
    }
}
    function PhantrangDSPhong1($sophong,$p){
        if (isset($_GET['id'])){ //Hàm GET lấy giá trị từ link, nếu tồn tại biến id thì lấy giá trị từ biến
            $id=$_GET['id'];
        $sql_pt= "Select * from tb_phong where `Mã LP` like '%$id%'";
        $result = $this->conn->query($sql_pt);// truy vấn đến CSDL thông qua đối tượng $this -> conn
        $tongsotrang = (ceil(($result->num_rows)/$sophong));
        echo '<ul class="nutphantrang">';
        // Hiển thị số phân trang
        echo '<div class="sotrang">';
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){
                echo '<a class=button2 href="../Trangchu/Chiadanhmuc.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a class=button2 href="../Trangchu/Chiadanhmuc.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
}
    }
    function timkiemphong1($sophong,$p)
    {
        if (isset ($_POST["id"]))
        {
            $id=$_POST['id'];
            $sql = "Select * from `tb_phong` where `Tên Phòng` like '%$id%' OR `Mã Phòng` like '%$id%'  OR `Mã LP` like '%$id%' OR `Mô tả` like '%$id%'";
            $result = $this->conn->query($sql);
            if($result->num_rows<=0)
                echo "Không tìm thấy phòng";
        else
        {
            
        $tongsotrang = (ceil(($result->num_rows)/$sophong));
        echo '<ul class="nutphantrang">';
        //Hiển thị số phân trang
        echo '<div class="sotrang">';
        echo 'Trang ' .$p ;//.' của ' . $tongsotrang;
        echo '</div>';
           
        for($i=1;$i<=$tongsotrang;$i++)
        {
            if($i==$p){
                echo '<a  class=button2 href="../Trangchu/Danhmuc.php?p=' . $i . '">' . $i . '</a>';
            } else {
                echo '<a  class=button2 href="../Trangchu/Danhmuc.php?p=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</ul>';
        }
        }
    }
    function Themphongtheodoi(){
        session_start();
        //session_destroy();
        if (isset($_GET["id"])){//kiểm tra xem có tồn tại biến id không, nếu có thì lấy giá trị của id từ đường link
            $id=$_GET["id"];
            $kt=0;
            for($i=1;$i<=$_SESSION["soluongphong"];$i++){
                if($_GET["id"]==$_SESSION["id".$i]){
                    $kt=1;
                    echo "<script> alert('Phòng này đã được theo dõi trước đó!');history.back();</script>";
                    break;
                }
            }    
            if($kt==0)
            {
                $sql="Select * from tb_phong where `Mã Phòng`='$id'";
                $result=$this->conn->query($sql);
               if ($result->num_rows>0){// "num_rows" được sử dụng để lấy số lượng dòng dữ liệu có trong kết quả truy vấn. Nếu giá trị trả về lớn hơn 0, tức là có ít nhất một dòng dữ liệu trong kết quả truy vấn, thì câu lệnh if sẽ được thực thi.
                $row=$result->fetch_assoc();//lấy dòng dữ liệu từ kết quả truy vấn
                $_SESSION["soluongphong"]++;//mỗi lần lấy thì tăng 1 biến session soluongphong
                $i=$_SESSION["soluongphong"];// gán biến i=session soluongphong
                $_SESSION["id".$i]=$row["Mã Phòng"];//lưu cột mã phòng vào biến session id
                $_SESSION["idLP".$i]=$row["Mã LP"];//lưu cột mã phòng vào biến session id
                $_SESSION["tenphong".$i]=$row["Tên Phòng"];//lưu cột tên phòng vào biến session tenphong
                $_SESSION["hinhanh".$i]=$row["Hình ảnh"];//lưu cột hình ảnh vào biến session hinhanh
                $_SESSION["dongia".$i]=$row["Giá Phòng (Ngày)"];//lưu cột giá phòng vào biến session dongia
                $_SESSION["mota".$i]=$row["Mô tả"];//lưu cột mô tả vào biến session mota
            }
            
        }
    }
    
    }
    
    function Themphongmuangay(){
        session_start();
        //session_destroy();
        if (isset($_GET["id"])){//kiểm tra xem có tồn tại biến id không, nếu có thì lấy giá trị của id từ đường link
            $id=$_GET["id"];
                $sql="Select * from tb_phong where `Mã Phòng`='$id'";
                $result=$this->conn->query($sql);
               if ($result->num_rows>0){// "num_rows" được sử dụng để lấy số lượng dòng dữ liệu có trong kết quả truy vấn. Nếu giá trị trả về lớn hơn 0, tức là có ít nhất một dòng dữ liệu trong kết quả truy vấn, thì câu lệnh if sẽ được thực thi.
                $row=$result->fetch_assoc();//lấy dòng dữ liệu từ kết quả truy vấn
                $_SESSION["id"]=$row["Mã Phòng"];//lưu cột mã phòng vào biến session id
                $_SESSION["idLP"]=$row["Mã LP"];//lưu cột mã phòng vào biến session id
                $_SESSION["tenphong"]=$row["Tên Phòng"];//lưu cột tên phòng vào biến session tenphong
                $_SESSION["hinhanh"]=$row["Hình ảnh"];//lưu cột hình ảnh vào biến session hinhanh
                $_SESSION["dongia"]=$row["Giá Phòng (Ngày)"];//lưu cột giá phòng vào biến session dongia
                $_SESSION["mota"]=$row["Mô tả"];//lưu cột mô tả vào biến session mota
            }
            
        }
    }
    function Thuedichvu(){
        session_start();
        //session_destroy();
        if (isset($_GET["id"])){//kiểm tra xem có tồn tại biến id không, nếu có thì lấy giá trị của id từ đường link
            $id=$_GET["id"];
                $sql="Select * from tb_dichvu where `Mã DV`='$id'";
                $result=$this->conn->query($sql);
               if ($result->num_rows>0){// "num_rows" được sử dụng để lấy số lượng dòng dữ liệu có trong kết quả truy vấn. Nếu giá trị trả về lớn hơn 0, tức là có ít nhất một dòng dữ liệu trong kết quả truy vấn, thì câu lệnh if sẽ được thực thi.
                $row=$result->fetch_assoc();
                $_SESSION["idDV"]=$row["Mã DV"];
                $_SESSION["tenDV"]=$row["Tên DV"];
                $_SESSION["loaiDV"]=$row["Loại DV"];
                $_SESSION["dongiaDV"]=$row["Giá DV"];
            }
            
        }
    }
    
    function ThanhToan($idKH)
    {
       // $iddp = $str;
        $sql="Select * from tb_nhatkydatphong where `Mã KH`='$idKH'";
        $result = $this->conn->query($sql);
        return $result;
    }
    function LayTTThanhToan($iddp)
    {
       // $iddp = $str;
        $sql="Select * from tb_chitietnkdp where `Mã NKDP`='$iddp'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>