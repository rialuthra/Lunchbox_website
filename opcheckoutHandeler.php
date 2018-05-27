<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Phonenumber = $_POST['phonenumber'];
$City = $_POST['city'];
$Address = $_POST['address'];
$Cardname =$_POST['cardname'];
$Cardnumber =$_POST['cardnumber'];

$sql = "INSERT INTO deliveryonline (firstname, lastname, phonenumber, city, address, cardname, cardnumber ) 
VALUES ('$Firstname', '$Lastname', '$Phonenumber', '$City', '$Address','$Cardname','$Cardnumber')";

if (!mysqli_query($con, $sql)){
    echo "Sorry, Your transaction is failed";
}
else{ echo "Your Transaction is Success";}

header("refresh:2; url= feedback.php");
?>