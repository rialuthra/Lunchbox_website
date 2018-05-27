<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";


$Comment = $_POST["message"];

if (isset($_POST["satisfied"])) {
    $sql = "INSERT INTO feedback (user_id, feedback, comment) 
    VALUES (NULL, 'Statisfied', '$Comment')";
}
elseif (isset ($_POST["neutral"])){
    $sql = "INSERT INTO feedback (user_id, feedback, comment) 
    VALUES (NULL, 'Neutral', '$Comment')";
}
elseif (isset ($_POST['unsatisfied'])){
    $sql = "INSERT INTO feedback (user_id, feedback, comment) 
    VALUES (NULL, 'Unsatisfied', '$Comment')";
}



if (!mysqli_query($con, $sql)){
    echo "Not Inserted";
}
else{ echo "Inserted";}

header("refresh:2; url= feedback.php");
?>





<!--

session_start();
include "db.php";

$msg = $_POST["message"];


if(isset($_POST["submit"]))

    $query = mysqli_query("INSERT INTO 'feedback'
	(`user_id`, `feedback`, `comment`) 
	VALUES (NULL, NULL, '$msg'") or die(mysqli_error());

$fdb=$_POST[''];
while($row=mysqli_fetch_array($query))

return $row;
-->