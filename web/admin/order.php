<?php
 session_start();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
$sql="SELECT * FROM `order`";
$result=mysqli_query($conn, $sql);
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
  </nav><br>
  <div class="container-fluid" style="padding-left: 90px;padding-right: 90px;">
      
<table class="table table-bordered border-primary">
  <thead>
    <tr style="font-size:14px;text-align: center;">
      <th scope="col">STT</th>
      <th scope="col">Mã Đơn Hàng</th>
      <th scope="col">Tên Người Nhận</th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Phương Thức Thanh Toán</th>
      <th scope="col">Ghi Chú</th>
      <th scope="col">Trạng Thái</th>
      <th scope="col">Xem đơn | Duyệt</th>
    </tr>
  </thead>
  <?php 
    $i=0;
    while ($row= mysqli_fetch_array($result)) {
     $i++;
    ?>
      <tbody>
        <tr style="font-size:13px;text-align: center;">
          <th scope="row"><?php echo $i ?></th>
          <td><?php echo $row['code_ord']?></td>
          <td><?php echo $row['tenNguoiNhan']?></td>
          <td><?php echo $row['sdtNguoiNhan']?></td>
          <td><?php echo $row['diaChi']?></td>
          <td><?php echo $row['ppThanhToan']?></td>
          <td><?php echo $row['ghiChu']?></td>
          <td>
            <?php 
              if ($row['trangThai'] == 1) {
                echo "Chưa xử lý!";
              }else {
                echo "Đã xử lý!";
              }
            ?>
          </td>
          <td>
          <a href="xemDonHang.php?code_sp=<?php echo $row['code_ord']?>"><i class="fa-regular fa-eye"></i></a> | 
          <a href="xacNhan.php?code_sp=<?php echo $row['code_ord']?>"><i class="fa-regular fa-calendar-check"></i></a>
        </tr>
      </tbody>
  <?php  }?>
</table>
  </div>
  </div>
</body>
</html>