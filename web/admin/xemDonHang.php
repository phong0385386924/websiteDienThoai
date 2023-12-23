<?php
 session_start();
    require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
        $code_sp=$_GET['code_sp'];
        $sql = "SELECT * FROM `cart_detail`, `sanph1` WHERE
        cart_detail.sanpham_id = sanph1.sanPh_id 
        AND cart_detail.code_ord = '".$code_sp."' ORDER BY cart_detail.id_detail DESC";
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
  </nav>
    
  <div class="container-fluid" style="padding-left: 90px;padding-right: 90px;">
      
<table class="table table-bordered border-primary">
  <thead>
    <tr style="font-size:14px;text-align: center;">
      <th scope="col">STT</th>
      <th scope="col">Mã Đơn Hàng</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Đơn Giá</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Thành Tiền</th>
    </tr>
  </thead>
  <?php 
    $a=0;
    $tongTien=0;
    while ($row= mysqli_fetch_array($result)) {
     $a++;
     $thanhTien = $row['gia']*$row['soLuongMua'];
     $tongTien+=$thanhTien;
    ?>
      <tbody>
        <tr style="font-size:13px;text-align: center;">
          <th scope="row"><?php echo $a ?></th>
          <td><?php echo $row['code_ord']?></td>
          <td><?php echo $row['name']?></td>
          <td style="height: 17%; width: 17%;"><img style="height: 25%; width: 25%;" src="../admin/image/<?php echo $row['img']; ?>"></td>
          <td><?php echo number_format($row['gia']);?> VND</td>
          <td><?php echo $row['soLuongMua']?></td>
          <td><?php echo number_format($thanhTien);?> VND</td>
        </tr>      
      </tbody>
  <?php  } ?>
          <td style="font-size:17px;" colspan="12">
          Tổng: <?php echo number_format($tongTien);?> VND
          </td>
  </table>
  </div>
  <footer>
    <p>&copy; Chịu trách nhiệm nội dung: Nguyễn Văn Phong 22NS047.</p>
  </footer>
</body>
</html>
</body>
</html>