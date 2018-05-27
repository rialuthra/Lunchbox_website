<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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

        <script type="text/javascript">
            function displaynum(n1) {

            if (login.psw.value.length<4)
            {login.psw.value=login.psw.value+n1;
            }
            else
                alert("Please enter 4 digits only");

            }
        </script>

	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="index.php?#" class="navbar-brand"><img src="product_images/Lunch_Box_Logo.PNG" style="height: 35px"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php?#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Login Form</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form method="get" onsubmit="return false" id="login" name="login">
							<label for="email">Login:</label>
                            <label>Enter 4 digit pin</label><br/>
                             <input type="password" name="psw" onkeydown="return false" title="Please enter the pin using numbers below."><br><br>

                                <input type="button" name="btn1" value="1" id="one" onclick="displaynum(btn1.value)"> &nbsp;
                                <input type="button" name="btn2" value="2" id="two" onclick="displaynum(btn2.value)"> &nbsp;
                                <input type="button" name="btn3" value="3" id="three" onclick="displaynum(btn3.value)"> &nbsp;
                                <input type="button" name="btn4" value="4" id="four" onclick="displaynum(btn4.value)">  &nbsp;
                                <input type="button" name="btn5" value="5" id="five" onclick="displaynum(btn5.value)">


							<p><br/></p>
                         <!--   <input type="submit" class="btn btn-success" style="float:right;" Value="Login" onclick="login();"> -->
                            <input type="reset" name="reset" value="Reset" class="btn btn-success" style="float:right; margin-left: 5px">
                            <input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















