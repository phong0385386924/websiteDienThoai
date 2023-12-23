
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br><br><br><br>
<main>
    <form action="" method="post">
        <h1>ĐĂNG NHẬP</h1>
        <?php
    require_once('D:\xampp\htdocs\doAn_1\web\admin\config\db.php');
    session_start();

    if (isset($_POST['uname'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM `users1` WHERE us_name = ? AND us_pass = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!$row) {
            echo '<div class="alert alert-danger">Username or password error!</div>';
        } else {
            $_SESSION['id_us'] = $row['us_id'];
            $_SESSION['name'] = $row['hoTen'];
            
            if ($row["typeuser"] == "user") { 
                header("Location: ../trangChu/index.php");
            } else if ($row["typeuser"] == "admin") {
                header("Location: admin.php");
            }
        }
    }
?>
<!-- <a href="index.php" target="page">Trang 1</a>
<a href="../trangChu/index.php" target="page">Trang 2</a> -->
<!-- <iframe name="page" src=""../trangChu/index.php""></iframe> -->
        <div>
            <label for="username">Username:</label>
            <input type="text" name="uname" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pass" id="password">
        </div>
        <section>
            <button style="border-radius: 5px;" type="submit">Đăng nhập</button>
            
            <a href="register.php">Đăng ký</a>
        </section>
    </form>
    <a href="../trangChu/index.php">Quay lại trang chủ</a>
</main>
</body>
</html>