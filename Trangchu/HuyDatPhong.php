<?php
session_start();
        $iddp=$_GET['iddp'];
       // $idKH=$_GET['idKH'];
        include('../control/Connectdb.php');
      //  $sql_phong = "UPDATE tb_phong SET `Mô tả`='Sẵn sàng' WHERE `Mã Phòng`=$id";
        $sql_nhatky = "UPDATE tb_nhatkydatphong SET `Ghi chú`='Khách đã hủy đặt phòng.' WHERE `Mã NKDP`=$iddp";
       
        $lay_idp="Select `Mã Phòng` from tb_chitietnkdp WHERE `Mã NKDP`='$iddp' ";
        $resultID=$conn->query($lay_idp);
        if ($conn->query($sql_nhatky)){
      //  $donhang=$resultID->fetch_assoc();
        while ($donhang=$resultID->fetch_assoc()){
          $idphong = $donhang["Mã Phòng"];
          $sql_phong = "UPDATE tb_phong SET `Mô tả`='Sẵn sàng' WHERE `Mã Phòng`='$idphong'";
          $conn->query($sql_phong);
          }
      //  if ($conn->query($sql_phong)) 
       // {
        //header("Location:Danhmuc.php");
        echo "<script> alert('Đã hủy đơn đặt phòng!');history.back();</script>";
        } else {
       echo "Error: ".$sql . mysqli_error($conn);
   //}
}
?>