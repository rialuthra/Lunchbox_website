<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

$CategoryID = $_POST['category'];
$sql = "DELETE FROM categories WHERE cat_id = $CategoryID";


if (!mysqli_query($con, $sql)){
    echo "failed to delete";
}
else{ echo "Deleted";}

header("refresh:1; url= maintenance_delete_category.php");
?>