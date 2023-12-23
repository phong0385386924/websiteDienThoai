<?php
      require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giỏ hàng</title>
    <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="thanhchuyenhuong.css">
</head>
<body>
      <?php include("menu.php"); 
      // echo  $_SESSION['id_us'];
      ?><br>
      <div class="container" style="width: 420px; height: 50px">
    <ul class="progress" style="height: 22px">
      <li ><a href="cart.php">Giỏ hàng</a></li>
      <li class="beforeactive"><a href="thanhToan.php">Thanh toán</a></li>
      <li class="active"><a href="gioHang1.php">Đơn hàng</a></li>
      <!-- <li><a href=""></a></li> -->
    </ul>
  </div><br>  


<div class="container">
      
      <table class="table table-bordered border-dark">
        <thead>
          <tr style="font-size:14px;text-align: center;">
            <th scope="col">STT</th>
            <th scope="col">Mã Đơn Hàng</th>
            <th scope="col">Tên Người Nhận</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Liên Hệ</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Ngày Đặt</th>
            <th scope="col">Xem Đơn</th>
            <th scope="col">In Đơn</th>
          </tr>
        </thead>
        <?php 
          if (empty($_SESSION['id_us'])) {
          }else {
             $id_us=$_SESSION['id_us'];
              $sql = "SELECT * FROM `order`, `users1` WHERE order.userid = users1.us_id
              AND order.userid = $id_us ORDER BY order.id DESC";
              $result=mysqli_query($conn, $sql);
        
          $i=0;
          while ($row= mysqli_fetch_array($result)) {
          $i++;
        ?>
      <tbody>
        <tr style="font-size:13px;text-align: center;">
          <th scope="row"><?php echo $i ?></th>
          <td><?php echo $row['code_ord']?></td>
          <td><?php echo $row['tenNguoiNhan']?></td>
          <td style="height: 19%; width: 19%;"><?php echo $row['diaChi']?></td>
          <td><?php echo $row['sdtNguoiNhan']?></td>
          <td>
            <?php 
              if ($row['trangThai'] == 1) {
                echo "Chưa xử lý!";
              }else {
                echo "Đã xử lý!";
              }
            ?>
          </td>
          <td><?php echo $row['ngayDat']?></td>
          <td><a href="xemDon.php?code_sp=<?php echo $row['code_ord']?>"><i class="fa-regular fa-eye"></i></a></td>
          <td><a href="inDon.php?code_sp=<?php echo $row['code_ord']?>"><i class="fa-solid fa-print"></i></a></td>
        </tr>
      </tbody>
  <?php  }} ?>
        </table>
        </div>

<!-- footer -->
      <footer class="site-footer">
        <div class="container">
          <hr>
          <div class="row">
            <div class="col-xs-4 col-md-4">
              <h5>Thông tin và chính sách</h5>
              <ul id="phong2" class="footer-links">
                <li><a href="index.php">Tra thông tin bảo hành</a></li>
                <li><a href="index.php">Chính sách bảo hành</a></li>
                <li><a href="index.php">Tìm hiểu về mua trả góp</a></li>
                <li><a href="index.php">Phản hồi</a></li>
                <li><a href="index.php">Liên hệ hợp tác kinh doanh</a></li>
              </ul>
            </div>
    
            <div class="col-xs-5 col-md-5">
              <h5>Tổng đài hỗ trợ miễn phí</h5>
              <ul class="footer-links">
                <li>Gọi mua hàng : <b>1800.2030</b>(7h30-22h00)</li>
                <li>Gọi khiếu nại: <b>1800.2131</b>(8h00-21h30)</li>
                <li>Gọi bảo hành : <b>1800.2001</b>(7h30-21h30)</li>
              </ul>
            </div>
            <div class="col-xs-3 col-md-3">
              <h5>Kết nối với chúng tôi</h5>
              <ul class="card-footer">
                <li><a href="https://www.facebook.com/profile.php?id=100042451724218"><img style="height: 50px; width: 50px;" src="image/faceb.jpg" alt=""></a></li>
                <li><a href="https://www.instagram.com/phongnguyen8761/" ><img style="height: 40px; width: 40px;" src="image/insta.jpg" alt=""></a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
    </footer>
    <div class="mt-5 p-4 bg-dark text-white text-center">
      <p>© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
        Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
    </div>
</body>
</html>