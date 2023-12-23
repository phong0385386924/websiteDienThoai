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