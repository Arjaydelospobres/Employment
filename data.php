<?php 

$server = "localhost:3306";
$user = "root";
$pass = "";
$database = "account";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Can't Connection.')</script>");
}

?>