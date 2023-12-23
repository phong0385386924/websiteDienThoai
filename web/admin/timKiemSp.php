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

<?php
if (isset($_GET['inputTimSp'])) {
    $tukhoaTim = $_GET['inputTimSp'];
    try {
        echo '
        <div class="container">
<form action="timKiemSp.php" method="GET"><input type="text" placeholder="Bạn tìm gì..." name="inputTimSp"><button  style="position: absolute;" ><a href="timKiemSp.php"><i class="fa-solid fa-magnifying-glass"></i></a></button></form>
<br>
</div>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th style="text-align: center;">Ảnh</th>
                                <th>Số lượng</th>
                                <th style="text-align: center;"><button type="button" class="btn" style="background-color:rgb(255, 0, 0)"><a style="color: #fff;" href="them.php"><i class="fa-solid fa-circle-plus"></i></a></button></th>
                            </tr>
                        </thead>
                        <tbody>';
        $sql = "SELECT * FROM `sanph1` WHERE name LIKE '%$tukhoaTim%'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 0) {
            echo '
            <div style="max-width: 550px; margin: auto; color:red; font-family: Arial, Helvetica, sans-serif;"> 
                <h3 style="font-family: Arial, Helvetica, sans-serif; font-size: 27px;">Không có sản phẩm: ' . $tukhoaTim . ' <i class="fa-regular fa-face-frown"></i>!</h3>                     
            </div>
            ';
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['sanPh_id'];
                $name = $row['name'];
                $gia = $row['gia'];
                $img = $row['img'];
                $soluong = $row['soluong'];   
                echo '
                <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . number_format($gia) . ' VND</td>
                    <td style="width:40%; text-align: center; "><img style="height: 20%; width: 20%;" src="image/' . $img . '"></td>
                    <td>' . $soluong . '</td>
                    <td>
                        <button class="btn" style="background-color:rgb(69, 189, 98);"><a style="color: #fff;" href="sua.php?updateid=' . $id . '"><i class="fa-solid fa-screwdriver-wrench"></i></a></button>
                        <button class="btn" style="background-color:rgb(255, 0, 0)"><a style="color: #fff;" href="xoa.php?deleteid=' . $id . '"><i class="fa-regular fa-trash-can"></i></a></button>
                    </td>
                </tr> 
                ';
            }
        }
        echo '
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
        </div>';
    } catch (\Throwable $th) {
    }
}else if(isset($_GET['inputTimUs'])) {
    $tukhoaTim = $_GET['inputTimUs'];
        
    try {
        echo '
    <div class="container">
<form action="timKiemSp.php" method="GET"><input type="text" placeholder="Bạn tìm tài khoản?" name="inputTimUs"><button  style="position: absolute;" ><a href="timKiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></button></form>
<br>
</div>';
if (empty($tukhoaTim)) {
    echo $tukhoaTim;
 }else { 
    echo'
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
                    <tbody>';
                            $sql = "select * from `users1` where `us_name` LIKE '%$tukhoaTim%' ";
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
                    </tbody>
                </table>
            </div>
        </div>
        <br>
</div> ';
}}}catch (\Throwable $th) {
} 
}
?>
  <footer>
    <p>&copy; Chịu trách nhiệm nội dung: Nguyễn Văn Phong 22NS047.</p>
  </footer>
</body>
</html>
</body>
</html>