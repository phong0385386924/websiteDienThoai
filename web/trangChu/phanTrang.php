
<?php
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
<form action="index.php" method="POST">
<ul class="pagination">
  <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
  <li class="page-item"><a class="page-link" href="index.php?p=1">1</a></li>
  <li class="page-item"><a class="page-link" href="index.php?p=2">2</a></li>
  <li class="page-item"><a class="page-link" href="index.php?p=3">3</a></li>
  <li class="page-item"><a class="page-link" href="index.php?p=4">4</a></li>
  <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
</ul>
</form>
</body>
</html>
