<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bộ lọc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="boLOc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container2">
    <form action="sapXepSanPham.php" method="POST">
      <button type="submit" name="sapXep" value="iphone" class="iphone"><i class="fa-brands fa-apple"></i> Apple</button>
      <button type="submit" name="sapXep" value="samsung" class="samsung">SAMSUNG</button>
      <button type="submit" name="sapXep" value="nokia" class="nokia">NOKIA</button>
      <button type="submit" name="sapXep" value="xiaomi" class="xiaomi">Xiaomi</button>
      </form>
      </div>
      <!--  -->
      <br>
      
    <div class="container3">
      <div class="filter-bar">
        <h5>Tiêu chí chọn hàng</h5>
        <div class="container5">
        <!-- <div class="filter-bar"> -->
        <!-- <h5>Sắp xếp theo</h5> -->
        <!-- <div class="container6"> -->
        <form class="container6" action="sapXepSanPham.php" method="POST" style="padding-left:90px;">
    <button style="font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;" type="submit" name="sapXep" value="giamdan"><i class="fa-solid fa-arrow-down-wide-short"></i> Giá cao-thấp</button>
    <button style="font-family: Arial, Helvetica, sans-serif;margin-left:69px;
  font-size: 13px;" type="submit" name="sapXep" value="tangdan"><i class="fa-solid fa-arrow-down-short-wide"></i> Giá thấp-cao</button>
</form>
        <!-- </div> -->
      </div>
      </div>
    </div>
    <br>
  </body>
</html>