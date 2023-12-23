<?php
      require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
// if(isset($_POST['submit'])){

$name = $_POST['name'];
$commen = $_POST['comments'];

      $insert = "INSERT INTO `danhgia1` (`ten`, `comment`) VALUES ('$name', '$commen');";
      mysqli_query($conn, $insert);
      header('location:danhGia.php');
// };
?>