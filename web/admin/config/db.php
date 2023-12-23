<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "doan1";
try {
    $conn = new mysqli($servername, $username, $password,$database,3307 );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

} catch (\Throwable $th) {
    //throw $th;
}
// Create connection

?>