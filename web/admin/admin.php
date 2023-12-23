<?php
  session_start();
  require('D:\xampp\htdocs\test_doan\carbon\autoload.php');
  use Carbon\Carbon;
  use Carbon\CarbonInterval;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
  <header style="text-align: center;">
    <h1 >Hi, <?php echo $_SESSION['name'] ?></h1>
    <a style="margin-left: 1400px;" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </header>
  <nav>
    <ul>
      <li><a href="admin.php">Dashboard</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="order.php">Orders</a></li>
      <li><a href="users.php">Customers</a></li>
    </ul>
  </nav>
  <br>
  <!-- <div class="container-fluid" style="padding-left: 90px;padding-right: 90px;">
  <h3>Thống kê doanh thu theo năm qua:</h3>
  <div id="myfirstchart" style="height: 250px;"></div>
  </div> -->
  <br>
  <footer>
    <p>&copy; Chịu trách nhiệm nội dung: Nguyễn Văn Phong 22NS047.</p>
  </footer>
</body>

<!-- <script>
  $(document).ready(function() {
    thongKe();
    new Morris.Area({
        element: 'chart',
        xkey: 'year',
        ykeys: ['order', 'sale', 'qty'],
        labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán']
      });
    function thongKe() {
      var text = '365 ngày qua';
      $.ajax({
        url: 'D:/xampp/htdocs/test_doan/web/admin/thongKe.php',
        method: 'POST',
        dataType: 'JSON',
        success: function(data) {
           char.setData(data);
           $('#text-date').text(text); 
        }  
      })
  }});
</script> -->
</html>