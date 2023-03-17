<?php 

include 'data.php';
error_reporting(0);
session_start();

if (isset($_SESSION['Name'])) {
    header("Location: home.php");
}

if (isset($_POST['add'])) {
    $ID = $_POST['ID'];
    $NAME = $_POST['Name'];
    $Section = $_POST['Section'];
    $Sale = $_POST['Sale'];

    if ($ID == $ID) {
        $sql = "SELECT * FROM recordlist WHERE ID='$ID'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO recordlist (ID, NAME, Section, Sale)
                    VALUES ('$ID', '$NAME', '$Section','$Sale')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Data Added Successfuly!')</script>";
                $_POST['ID'] = "";
                $Name = "";
                $Section = "";
                header("Location: Home.php");
            } else {
                echo "<script>alert('Something went wrong...')</script>";
            }
        } 
    }
}
?>