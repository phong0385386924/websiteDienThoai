
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
  <link href="css/bootstrap.css" rel="stylesheet">
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


<br><br><br><br>
            <!-- banner 2 -->
          <div class="container">
             <img src="image/banner-2.webp" alt="" style="width: 100%; margin-top: 20px; margin-bottom: 20px;">
          </div>  


          <div style="max-width: 550px; margin: auto;"> 
       <?php include("boLoc.php"); ?>
       </div>


        <section class="product-gallery-1">
            <div class="container">
              <div class="product-gallery-1-content">
                <div class="product-gallery-1-content-title">
                    <h2 style="margin-top: 20px; margin-bottom: 20px;">Sản phẩm hot nhất!</h2>
                </div>
                  <div class="product-gallery-1-content-product">
                    
                      <?php
                        // $sql = "SELECT * FROM `hang`";
                        // $result = mysqli_query($conn,$sql);
                        // if (!$result) {
                        //    die("invalid query!");
                        // } 
                        // while ( $row = mysqli_fetch_assoc($result)) {                              
                        //     $id=$row['id'];
                        //     $nameHang=$row['tenhang'];
                        //   }


                        try {                
                            $tuKhoa = $_POST['sapXep'];
                           if ($tuKhoa == "tangdan") {
                            $sql = "SELECT * FROM `sanph1` ORDER BY gia";
                           }else if($tuKhoa =="giamdan") {
                            $sql = "SELECT * FROM `sanph1` ORDER BY gia DESC";
                           }else if($tuKhoa =="iphone"){
                            $sql = "SELECT * FROM `sanph1` WHERE `id_hang`= 2";
                           }else if($tuKhoa =="samsung"){
                            $sql = "SELECT * FROM `sanph1` WHERE `id_hang`= 4";
                           }else if($tuKhoa =="nokia"){
                            $sql = "SELECT * FROM `sanph1` WHERE `id_hang`= 1";
                           }else if($tuKhoa =="xiaomi"){
                            $sql = "SELECT * FROM `sanph1` WHERE `id_hang`= 3";
                           }
                            $result = mysqli_query($conn,$sql);
                            if ($result == NULL) {
                              echo '
                              <div style="max-width: 550px; margin: auto;"> 
                              <h3> Không có sản phẩm nào</h3>
                              </div>
                              ';
                            } 
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $id=$row['sanPh_id'];
                                $name=$row['name'];
                                $gia=$row['gia'];
                                $img=$row['img'];
                                $soluong=$row['soluong'];
                                echo '
                                <div class="product-gallery-1-content-product-item">
                                <img  src="../admin/image/'.$img.'">
                                <a href="sanPham.php?id='.$id.'">
                                <div class="product-gallery-1-content-product-text" style="margin-top: 15px;">
                                    <h6>'.$name.'</h6>
                                    <h6>'.number_format($gia).' VND</h6>
                                    <h6 style="color: red;"><del>39.290.000</del><sup>đ</sup>-7%</h6>
                                    <h6>Số lượng: '.$soluong.'</h6>
                                    <p>
                                    4.3 <i class="fa-solid fa-star"></i>(1777)
                                  </p>
                              </div>
                               </a>
                                  </div>  
                                ';
                            }
                        } catch (\Throwable $th) {
                        }               
                        ?>
<!-- ip14 pro max -->
              <!-- <div class="product-gallery-1-content-product-item">
                  <img src="image/ip14promax-128gb.webp" alt="">
             <a href="sanPham.html">
              <div class="product-gallery-1-content-product-text" style="margin-top: 15px;">
                <h6>Iphone 14 Pro Max</h6>
                <h6>27.990.000<sup>đ</sup></h6>
                <h6><del>29.290.000</del><sup>đ</sup>-7%</h6>
                <p>
                  4.1 <i class="fa-solid fa-star"></i>(1234)
                </p>
            </div>
             </a>
                </div> -->
                <!-- ---------------------------- -->
                  </div>
              </div>
            </div>
        </section>


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
