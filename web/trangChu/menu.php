<!-- tìm sản phẩm -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <nav>
        <div class="container1">
            <ul>
                <li><a href="index.php"><img src="../logoWeb.png" alt="" height="50px" width="150px"></a></li>
                <li><div class="dropdown">
                    <button style="font-family: Arial, Helvetica, sans-serif;  font-size: 13px;"><i class="fa-solid fa-bars"></i> Danh mục</button>
                    <div class="dropdown-menu">

                    <?php 
                        $conn = mysqli_connect("localhost","root","","doan1",3307);
                        $sql = "SELECT * FROM danhmuc1";
                        $kq = mysqli_query($conn,$sql);
                        while ($row= mysqli_fetch_array($kq)) {
                            echo '<a href="phanloaiSp.php?iddm='.$row['id'].'">'.$row['iconDm'].' '.$row['tendanhmuc'].'</a>';
                        }
                    ?> 
                    </div>
                </div></li>
                <li><a href=""><h6 style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: aliceblue; padding-top: 10px;">Địa điểm gần nhất:</h6><h6 style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;" >Đà Nẵng <i class="fa-solid fa-caret-down"></i></h6></a></li>
                <li><form action="timKiem.php" method="GET"><input type="text" placeholder="Bạn tìm gì..." name="inputTimSp"><button  style="position: absolute;" ><a href="timKiem.php"><i class="fa-solid fa-magnifying-glass"></i></a></button></form></li>
                <li><i class="fa-solid fa-phone"></i><h6 style="font-family: Arial, Helvetica, sans-serif;
                font-size: 13px;">Mua hàng liên hệ :<br> 20032001</h6></li>           
                <li><a href="cart.php"><button style="font-size: 13px;display:flex; "><i class="fa-solid fa-cart-shopping" style="margin-top: 6px;"></i> <h6 style="margin-top: 6px;font-size: 13px;" > Giỏ hàng </h6>              
                    <?php 
                    if (!empty($_SESSION['cart'])) {
                        $cart=$_SESSION['cart'];
                        $count=count($cart);
                        echo '<div style="background-color: #FED100;color:black; width: 32px; height: 18px; text-align: center; border-radius: 20px;font-size: 13px; margin-left: 74px; margin-top: -10px; position: absolute;">';
                        echo $count;
                        echo '</div>';
                        echo '<div style="background-color: #FED100; width: 7px; height: 7px; position: absolute;margin-left: 79px;margin-top: 4px; transform: rotate(55deg);" >';
                    }   
                    ?>   
                </button></a></li>
                <li><a href="danhGia.php" style="font-size: 15px;"><i class="fa-solid fa-user-pen"></i> Đánh giá </a></li>
                <li><a href="../admin/logout.php"><button style="font-size: 13px;"><i class="fa-regular fa-circle-user"></i>
                <br><?php 
                    // 
                    if (empty($_SESSION["name"])) {
                        echo 'Đăng nhập';
                    } else {
                        echo 'Đăng xuất';  
                    }
                ?></button></a></li>
                <li><?php  
    if (!empty($_SESSION["name"])) {
        echo '<div style="color: white;text-align: center;font-size: 15px;"><img src="image/hi.png" style="width: 63px;height: 33px;"><br> '.$_SESSION["name"].'!</div>';
    }
?></li>
            </ul>
        </div>
    </nav>
</body>
</html>