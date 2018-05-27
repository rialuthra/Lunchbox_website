<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

$ProductID = $_POST['product'];
$sql = "DELETE FROM products WHERE product_id = $ProductID";


if (!mysqli_query($con, $sql)){
    echo "failed to delete";
}
else{ echo "Deleted";}

header("refresh:2; url= maintenance_delete_item.php");
?>