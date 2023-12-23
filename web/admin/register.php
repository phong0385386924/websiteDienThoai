<?php
 session_start();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['uname']);
    $hoTen =  $_POST['hoTen'];
    $pass = $_POST['pass'];
    $cpass = $_POST['pass2'];
    $user_type = $_POST['email'];
 
    $select = "SELECT * FROM users1 WHERE us_name = '$name' AND us_pass = '$pass'";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
        echo '<div style="text-align: center;" class="alert alert-danger">Đã tồn tại tài khoản!</div>';
    } else {
        if($pass != $cpass){
            echo '<div style="text-align: center;" class="alert alert-danger">Mật khẩu không khớp!</div>';
        } else {
            $insert = "INSERT INTO users1 (hoTen, email, us_name, us_pass) VALUES ('$hoTen', '$user_type', '$name', '$pass')";
            mysqli_query($conn, $insert);
            header('location:index.php');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="padding-top:50px;">
    <h2 style="padding: 40px 40px 70px 190px;">Đăng ký</h2>
    <form method="post">

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
    <input type="text" class="form-control" name="hoTen">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
    <input type="text" class="form-control" name="uname">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
    <input type="password" class="form-control" name="pass">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nhập lại mật khẩu</label>
    <input type="password" class="form-control" name="pass2">
    </div>

   
    
  <br>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  <a style="margin-left:356px;" href="index.php">Back ></a>
</form><br><br><br><br>
    </div>
    <div class="col-sm-4"></div>
    </div>
</body>
</html>