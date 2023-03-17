<?php
$conn = new mysqli("localhost:3306","root","","account");

if ($conn->connect_error)
{
    die("Connection failed: ". $conn->connect_error);
}
    $ID=$_POST['ID'];
    $NAME=$_POST['Name'];
    $Section=$_POST['Section'];
    $Sale=$_POST['Sale'];

    $sql = "UPDATE recordlist SET Name='$NAME', Section='$Section',Sale='$Sale' WHERE ID='$ID'";

    if ($conn->query($sql) == true)
        {
            echo "<script>alert('Success: Data Updated')</script>";
            header("Location: Update.php");
        }else {
            echo "<script>alert('Something went wrong or Invalid ID.')</script>". $conn->error;
                }
$conn->close();
?>