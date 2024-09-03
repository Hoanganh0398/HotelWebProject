<?php 
include_once("../control/Control.php");
$control = new control();
$result=$control->Themphongmuangay();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Datphong.css" type="text/css">
    <title>Đặt Phòng</title>
</head>
<style>
</style>
<body>

<?php
  $nameError ="";

  if( $_SERVER["REQUEST_METHOD"] == "POST" ){
   if(empty($_POST['fname'] ) ) {
      $nameError ="Không được để trống";
   }
   else{
      echo $_POST['name'];
   }

  }

?>
<div class="background-image">
     <div class="wrapper">
      
      </div>
         
     </div>
   
      <div class="container">
         <h1> Đăng ký Đặt Phòng</h1>
         <form action="../control/LapdonMuangay.php" method="post">   
            <div class="form-group">
               <label for="fname"> Tên Khách Hàng: </label>
               <input type=" text" id="fname" name="name" value="<?php echo $_SESSION['fullname']?>">
               <span class="error"> <?php echo $nameError ?> </span>
            </div>
            <div class="form-group">
               <label for="sdt">Số điện thoại: </label>
               <input type=" text" id="sdt" name="sdt" value=" <?php echo $_SESSION['sdt']?>">
            </div>

            <div class="form-group">
               <label for="email">Email: </label>
               <input type=" text" id="email" name="email" value=" <?php echo $_SESSION['email']?>">
            </div>

            
            <div class="form-group">
               <label for="name">Phòng Đặt: </label>
               <input type=" text" id="name" name="phong" value=" <?php echo $_SESSION['tenphong']?>">
            </div>


            <div class="form-group">
               <label for="dphong">Ngày dự kiến lấy phòng: </label>
               <input type="date" id="dphong" name="ngaynhan">
            </div>
             <div class="form-group">
               <label for="fphong"> Ngày dự kiến trả phòng: </label>
               <input type="date" id="fphong" name="ngaytra">
            </div>
            
            <div class="form-group">
               <label for="name">Thành tiền: </label>
               <input type=" text" id="name" name="dongia" value=" <?php echo $_SESSION['dongia']?>">
            </div>


            <div class="form-group">
                  <button type="submit" class="dangki" > Đặt phòng ngay </button>
            </div>


         </form>
             
      </div>
          

      <div> </div>
</div> 
</body>
</html>