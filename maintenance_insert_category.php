<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
?>
    <!DOCTYPE html>


    <html>
<head>
    <meta charset="UTF-8">
    <title>Lunch Box</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style></style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                <span class="sr-only"> navigation toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="admin_profile.php#" class="navbar-brand"><img src="product_images/Lunch_Box_Logo.PNG" style="height: 35px"></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="admin_profile.php#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintenance</a>
                    <ul class="dropdown-menu">
                        <li><a href="maintenance_insert_item.php" style="text-decoration:none; color:blue;">Insert new item</a></li>
                        <li class="divider"></li>
                        <li><a href="maintenance_insert_category.php" style="text-decoration:none; color:blue;">Insert new category</a></li>
                        <li class="divider"></li>
                        <li><a href="maintenance_delete_item.php" style="text-decoration:none; color:blue;">Delete new item</a></li>
                        <li class="divider"></li>
                        <li><a href="maintenance_delete_category.php" style="text-decoration:none; color:blue;">Delete new category</a></li>
                    </ul>
                </li>

                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="col-md-8 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-xs-12" id="product_msg">
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">Add New Category</div>
            <div class="panel-body">
                <form action="insert_category.php " method="post" enctype="multipart/form-data">
                    <table style = "width: 100%">
                        <tr>
                            <td>Select Category Icon :</td>
                            <td>
                                <select name = "category_detail">
                                    <option value="category">Categories</option>
                                    <option value="combo">Combos</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td><br/></td></tr>

                        <tr>
                            <td style="width: 25%">New Category : </td>
                            <td><input type="text" name="category_name"></td>
                        </tr>
                        <tr><td><br/></td></tr>

                        <tr>
                            <td>Select Category Icon :</td>
                            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        </tr>
                        <tr><td><br/></td></tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" value="Insert New Category" name="submit"></td>
                        </tr>

                    </table>

                </form>
            </div>
            <div class="panel-footer">&copy; Lunch Box 2018</div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</div>
</body>
    </html>