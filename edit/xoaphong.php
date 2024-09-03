<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/Dangki.css" type="text/css">
    <title>Xóa phòng</title>
</head>

<body>
<?php
        $id=$_GET['id'];
        include('../control/Connectdb.php');
        $deletesql = "DELETE FROM `tb_phong`  WHERE `Mã Phòng` like '%$id%'";
        if (mysqli_query($conn, $deletesql)) {
        header("Location: ../Admin/QLPhong.php");
        } else {
       echo "Error: ".$sql . mysqli_error($conn);
   }

    ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>