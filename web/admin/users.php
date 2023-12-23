<?php
 session_start();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header style="text-align: center;">
    <h1 >Admin</h1>
  </header>
  <nav>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="order.php">Orders</a></li>
      <li><a href="users.php">Customers</a></li>
    </ul>
  </nav>

  <div class="container">
<form action="timKiemSp.php" method="GET"><input type="text" placeholder="Bạn tìm tài khoản?" name="inputTimUs"><button  style="position: absolute;" ><a href="timKiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></button></form>
<br>
</div>
  <div class="container">
        <div class="panel panel-primary">
            <div class = "panel-heading">
            </div>
            <div class="panel-body">
            
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center;">
                            <th>ID</th>
                            <th>Tài khoản</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>Cấp quyền</th>
                            <!-- <th style="text-align: center;" > <button type="button" class="btn" style="background-color:rgb(255, 0, 0)" ><a style="color: #fff;" href="them.php"><i class="fa-solid fa-circle-plus"></i></a></button></th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        try {
                            $sql = "select * from `users1`";
                            $result = mysqli_query($conn,$sql);
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $id=$row['us_id'];
                                $name=$row['us_name'];
                                $email=$row['email'];            
                                $chucVu=$row['typeuser'];
                                echo '
                                <tr style="text-align: center;">
                                    <th scope="row" >'.$id.'</th>
                                    <td>'.$name.'</td> 
                                    <td>'.$email.'</td>                 
                                    <td>'.$chucVu.'</td>
                                    <td><a href="xacNhan.php?idcapQuyen='.$id.'"><i class="fa-solid fa-wrench"></i></a></td>
                                </tr>
                                ';
                            }
                        } catch (\Throwable $th) {
                        }               
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
</div>


  <footer>
    <p>&copy; Chịu trách nhiệm nội dung: Nguyễn Văn Phong 22NS047.</p>
  </footer>
</body>
</html>
</body>
</html>