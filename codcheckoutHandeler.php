<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Phonenumber = $_POST['phonenumber'];
$City = $_POST['city'];
$Address = $_POST['address'];

$sql = "INSERT INTO delivery (firstname, lastname, phonenumber, city, address ) 
VALUES ('$Firstname', '$Lastname', '$Phonenumber', '$City', '$Address')";
if (!mysqli_query($con, $sql)){
    echo "Transaction failed";
}
else{ echo "Transaction success.";}

header("refresh:2; url= feedback.php");
?>