<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

$target_dir = "product_images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$CategoryName = $_POST['category_name'];
$CategoryImageName =basename($_FILES["fileToUpload"]["name"]);
$CategoryDetail = $_POST['category_detail'];
$sql = "INSERT INTO categories (cat_title, cat_icon, cat_detail) 
VALUES ('$CategoryName', '$CategoryImageName', '$CategoryDetail')";


if (!mysqli_query($con, $sql)){
    echo "Not Inserted";
}
else{ echo "Inserted";}

header("refresh:2; url= maintenance_insert_category.php");
?>