<?php
$servername = "198.91.81.8";
$username = "france55_user";
$password = "1234";
$dbname = "france55_chat";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Conexión fallida: " . mysqli_connect_error());
}
?>
