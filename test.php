<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
?>
<!DOCTYPE html>


<html>
<head></head>
<body>
<p>something</p>
<?php
$sql = "SELECT * FROM categories WHERE cat_detail = 'category'";
$sqldata = mysqli_query($con, $sql) or die('error getting data');

echo "<select>";

while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<option value='";
    echo $row['cat_id'];
    echo "'>";
    echo $row["cat_title"];
    echo "</option>";
}
echo "</select>"
?>
</body>
</html>
