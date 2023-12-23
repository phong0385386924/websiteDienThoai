<!DOCTYPE html>
<html>
<head>
  <title>trang sản phẩm</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="sanpham.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>
  <?php
  session_start();
  include("menu.php");
  ?>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
    <br>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <?php
    // $sl=$_POST['number'];
                        try {
                          if (isset($_GET['id'])) {
                            $id=$_GET['id'];
                            $sql = "SELECT * FROM `sanph1` WHERE sanPh_id = $id";
                            $result = mysqli_query($conn,$sql);
                            if (!$result) {
                               die("invalid query!");
                            } 
                            while ( $row = mysqli_fetch_assoc($result)) {                              
                                $id2=$row['sanPh_id'];
                                $name=$row['name'];
                                $gia=$row['gia'];
                                $img=$row['img'];
                                $soluong=$row['soluong'];
                                $moTa = $row['moTaSp'];
                                echo '
                                <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="img" src="../admin/image/'.$img.'">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                              <br><br>                           
                            <div class="row">
                            </div>

                          </div>
                              </div>
                             
                              ';
                            }}
                        } catch (\Throwable $th) {
                        }               
                        ?>
<!-- --------------------- -->

     <div class="col-sm-4"> 
      
      <h1><?php echo $name?></h1>
     <p class="p"> Giá Bán: <font color="red"><?php echo number_format($gia).' VND'?></font></p>
     <p>Tình Trạng :
     <?php
        if ($soluong <= 0) {
          echo "<h6 style='color: red;'>Hết hàng</h6>";
        } else {
          echo "Còn hàng";
        }
        ?>
      </p>
      <form action="cartAdd.php">
    <div class="bonho">
      <label for="">Số lượng</label>
      <input type="hidden" name='id' value="<?php echo $id2 ?>">
    <input type="number" name="number" min="1" max="99"> 
        </div>
        <br>
        <div class="khuyenmai">   
          <ul>
            <li>
              <p>
                1. Tặng:&nbsp;<span style="color: #ff0000;">Cường lực&nbsp;-</span>&nbsp;<span style="color: #ff0000;">Ốp lưng&nbsp;- Tai nghe</span> khi mua BHV
              </p>
            </li>
            <li>
              <p>
                2. Giảm:&nbsp;<span style="color: #ff0000;">100k&nbsp;</span>khi mua bảo hành vàng
              </p>
            </li>
            <li>
              <p>
                3. Mua:Dán kính cường lực 5D chỉ&nbsp;<span style="color: #ff0000;">99k</span>
              </p>
            </li>
            <li>
              <p>4. Cam kết bán iPhone chính hãng :<a href=""> Click</a></p>
            </li>
          </ul>
        </div>

         <br>
        <div class="btn1" style="justify-content: space-evenly;">
          <a href="thanhToanNgay.php?idmua=<?php echo $id2 ?>"><button type="button" class="btn btn-warning" s>Mua Ngay</button></a>
          <button type="submit" class="btn btn-warning" ><i class="fa-solid fa-cart-arrow-down"></i></button>
      </div> 
    </div>
    </form>

    
    <div class="col-sm-3">
    <p class="p2">Phụ kiện hot</p>  
   <div class="row">
    <div class="col-sm-4">
    <img src="https://images.fpt.shop/unsafe/fit-in/200x200/filters:quality(90):fill(white)/https://fptshop.com.vn/Uploads/Thumbs/2019/1/18/636834206204347887_00529898-daidien.png" >

    </div>
     <div class="col-sm-7">
     <p>Loa bluetooth i.value BT117 red</p>
    </div>
   
     <div class="col-sm-4">
      <img src="https://bachkhoacomputer.com/wp-content/themes/opkinhthoitrang/thumbnail.php?src=https%3A%2F%2Fbachkhoacomputer.com%2Fwp-content%2Fuploads%2F2019%2F07%2FTai-nghe-Bluetooth-Awei-A930BS.jpg&w=188&h=188&zc=1&a=c">
    </div>

     <div class="col-sm-7">
     <p>Tai nghe bluetooth nhét tai i.value B923BL grey</p> 
    </div>

     <div class="col-sm-4">
      <img src="https://cdn.tgdd.vn/Products/Images/57/208991/sac-du-phong-anker-powercore-a1263-den-1-600x600.jpg">

    </div>
     <div class="col-sm-7">
     <p>Pin sạc dự phòng Li-ion 10000mAh Anker PowerCore</p>     
    </div>
    
     <div class="col-sm-4">
      <img src="https://ae01.alicdn.com/kf/HTB1YwK_XcrrK1RjSspaq6AREXXai/TAI-NGHE-AWEI-B923BL-thi-t-k-T-T-nh-Bluetooth-Th-Thao-Tai-Nghe-Kh.jpg_q50.jpg">
    </div>

     <div class="col-sm-7">
     <p>Tai nghe bluetooth nhét tai i.value B923BL black</p>     
    </div>
    
     <div class="col-sm-4">
      <img src="https://phukiengiare.com/images/thumbnails/480/480/variant_image/61/bao-da-galaxy-note-10-plus-handmade-1830.jpg">
    </div>

     <div class="col-sm-7">
     <p>Bao da Samsung Note 10 Plus Clear View Blue</p>    
    </div>
    
    <div class="col-sm-4">
      <img src="https://lesang.vn/images/san-pham/mieng-dan-man-hinh-samsung-note-10-vmax-tpu-full-man-hinh.jpg">
    </div>

     <div class="col-sm-7">
     <p>MDMH Samsung S10 - mặt trước</p>     
    </div>
   </div>

    </div>
  </div>
</div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
     <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.tgdd.vn/Products/Images/42/153856/Slider/vi-vn-iphone-11-mausac.jpg" alt="Los Angeles" width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/Products/Images/42/153856/Slider/-iphone-11-thietke.jpg" alt="Chicago" width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/Products/Images/42/153856/Slider/vi-vn-iphone-11-manhinh.jpg" alt="New York" width="100%" height="400px">
    </div>
      <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/Products/Images/42/153856/Slider/vi-vn-iphone-11-camerakep.jpg" alt="New York" width="100%" height="400px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
      <h1 class="tieude">Đánh giá chi tiết <?php echo $name ?></h1>
      <p class="tieude1">Nâng cấp mạnh mẽ.</p>
    <p style="font-size: 20px;"></p>
<!-- <button onclick="myFunction()" id="myBtn">Hiển THị Thêm</button> -->

    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3></h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
          </div>
          <div class="col-sm-4">
    <br><p style="font-size: 20px; text-align: center;">Thông Số Kỹ Thuật</p>
      <?php echo $moTa ?>
        <div class="show">
        </div>
      </div>
      </div>
        </div>
      </div>
      <div class="mt-5 p-4 bg-dark text-white text-center">
  <p>© 2023. Công ty cổ phần Thế Giới Điện Tử. <br>
    Địa chỉ: Khu đô thị Đại học Đà Nẵng, 470 Đ.Trần Đại Nghĩa, P.Hòa Quý, Q. Ngũ Hành Sơn, TP Đà Nẵng. Điện thoại: 028 3343960. Email: cskh@tgdtpdt.com. Chịu trách nhiệm nội dung: Nguyễn Văn Phong.</p>
</div>
</body>
</html>