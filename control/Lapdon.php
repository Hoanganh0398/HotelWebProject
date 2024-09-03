<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    include_once("Connect.php");
    $connect_2=new connect;
    $conn=$connect_2->getConn();
?>
<?php 
    session_start();
    $thanhcong=1;
    if(isset($_SESSION['idKH']))
    {
        $idlog = $_SESSION['idKH'];
        $sql="Select * from tb_khachhang Where `Tên đăng nhập`='$idlog'";
        $result=mysqli_query($conn,$sql);
        $thanhvien=$result->fetch_assoc();
        $ThoiDiemDatPhong=date(DATE_W3C); //lấy ngày hệ thống
        $ThoiDiemNhanPhong=date($_POST['ngaynhan']);
        $ThoiDiemTraPhong=date($_POST['ngaytra']);
        $dichvu=$_POST['dichvu'];
        $khuyenmai=$_POST['khuyenmai'];
        $iddp = random_int(1000,9999);
      //  $iddp=$random_bytes($thanhvien['Mã NKDP']);
      //  $name=$thanhvien['Tên KH'];
      //  $sdt=$thanhvien['SĐT'];
      //  $email=$thanhvien['Email'];
      //  $cccd=$thanhvien['CCCD'];
        $tong=0;
        for($i=1;$i<=$_SESSION["soluongphong"];$i++){
        $tong=$tong+($_SESSION["dongia".$i]);}
        $GhiChu='Đơn đặt phòng đã được xử lí. Liên hệ khách hàng: '.$_SESSION["sdt"];
        $them_dp="INSERT INTO tb_nhatkydatphong(`Mã NKDP`,`Mã KH`,`Mã KM`,`Ngày đặt`,`Ngày lấy phòng`,`Ngày dự kiến trả phòng`,`Đơn giá`,`Tiền cọc`,`Ghi chú`)
                VALUES ('$iddp','$idlog','$khuyenmai','$ThoiDiemDatPhong','$ThoiDiemNhanPhong','$ThoiDiemTraPhong','$tong','0','$GhiChu')";
        $conn->query($them_dp);
        $lay_iddp="Select `Mã NKDP` from tb_nhatkydatphong where `Mã KH`='$idlog' and `Ngày đặt`='$ThoiDiemDatPhong' and `Ngày lấy phòng`='$ThoiDiemNhanPhong' and `Ngày dự kiến trả phòng`='$ThoiDiemTraPhong'";
        $resultID=$conn->query($lay_iddp);
        $donhang=$resultID->fetch_assoc();
        for($i=1;$i<=$_SESSION["soluongphong"];$i++)
        {
            
       // $iddp = random_int(0,9999);
            $idphong=$_SESSION["id".$i];
            $tenphong=$_SESSION["tenphong".$i];
            $dongia=number_format($_SESSION["dongia".$i], 0,",",".");
            $them_ctdp="INSERT INTO tb_chitietnkdp(`Mã NKDP`,`Mã Phòng`,`Đơn giá phòng`) 
                        VALUES  ('$iddp','$idphong','$dongia')";
            if ($conn->query($them_ctdp))
                $thanhcong=1;
            else 
                $thanhcong=0;
        }
        if ($thanhcong==1)
        {   
            $lay_idp="Select `Mã Phòng` from tb_chitietnkdp WHERE `Mã NKDP`='$iddp' ";
            $resultP=$conn->query($lay_idp);
          //  $donhang=$resultID->fetch_assoc();
            while ($donhang=$resultP->fetch_assoc()){
              $idphong = $donhang["Mã Phòng"];
              $sql_phong = "UPDATE tb_phong SET `Mô tả`='Đang sử dụng' WHERE `Mã Phòng`='$idphong'";
              $conn->query($sql_phong);
              }
            $dtl=$_SESSION["dtl"] + $_SESSION["soluongphong"]*100;
            $sql_khach = "UPDATE tb_khachhang SET `Điểm tích lũy`='$dtl' WHERE `Mã KH`=$idlog";
            $conn->query($sql_khach);
            for($i=1;$i<$_SESSION["soluongphong"];$i++)
            {
                unset($_SESSION["id".$i]);
                unset($_SESSION["tenphong".$i]);
                unset($_SESSION["hinhanh".$i]);
                unset($_SESSION["dongia".$i]);
                unset($_SESSION["mota".$i]);
            }
            $_SESSION["soluongphong"]=0;
            $_SESSION["dtl"]=$tv["Điểm tích lũy"];
            echo "<script language='javascript'>alert('Lập hóa đơn thành công!'); location.href='../Trangchu/chitiet_thahtoan.php?thanhcong=1&iddp=$iddp'";
            header("Location: ../Trangchu/chitiet_thanhtoan.php?thanhcong=1&iddp=$iddp");
        }
        else 
        echo "<script language='javascript'>alert('Lập đơn hàng không thành công, Xin hãy kiểm tra lại!'); location.href='datphong_theodoi.php'";
    }
?>