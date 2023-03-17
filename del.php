<?php
$conn = new mysqli("localhost:3306","root","","account");

if ($conn->connect_error)
{
    die("Invalid Connection: ". $conn->connect_error);
}
    $ID=$_POST['ID'];
    $sql = "DELETE FROM recordlist WHERE ID='$ID'";

    if ($conn->query($sql) == TRUE)
        {
            echo "<script>alert('The Data is Deleted!!')</script>";
            header("Location: dfile.php");
        }else {
            echo "<script>alert('Failed!!!. Your ID Is Invalid .')</script>". $conn->error();
                }
$conn->close();
?>