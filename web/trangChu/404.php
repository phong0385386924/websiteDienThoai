
<?php
session_start();
require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <script src="//code.tidio.co/zeboamphee7kpin3fkjaec57il5fcyjn.js" async></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<!-- carousel -->
<div style="position: fixed; width: 100vw; top: 30;
  left: 0;
  width: 100%;
  z-index: 9999;"  >
    <div id="demo" class="carousel slide" data-bs-ride="carousel" >
        <!-- The slideshow/carousel -->
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="image/sale_1.webp" alt="" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="image/logo_2.webp" alt="" class="d-block w-100">
          </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <?php include("menu.php"); ?>
</div>
<br><br><br><br><br><br>
   

 <div class="container" style="text-align: center;">
  <img src="image/404.jpg" style="height: 80%;width: 80%; border-radius: 10px;">
  <a href="index.php" style="color:black; font-size: 25px;position: absolute; margin-left:-300px;margin-top:400px">Trang chủ <i class="fa-solid fa-chevron-right"></i></a>
 </div>

       
<!-- footer -->
  <!-- Site footer -->
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
          <ul id="phong2" class="footer-links">
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
