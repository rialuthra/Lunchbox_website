<?php
if (isset($_GET["register"])) {

	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lunchbox</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

        <script type="text/javascript">
            function displaynum(n1) {
                if (register.psw.value.length < 4)
                {register.psw.value=register.psw.value+n1;
                }
                else
                    alert("Please enter 4 digits only");

            }

            function displaynumber(n1) {
                if (register.con_psw.value.length < 4)
                {register.con_psw.value=register.con_psw.value+n1;
                }
                else
                    alert("Please enter 4 digits only");

            }

            function click_btn() {

                alert("Please enter the 4 digit pin using numbers below.")
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false" name="register">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div> <br/>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Enter 4 digit pin</label>

                                <br/> <input type="password" name="psw" class="form-control"  title="Please enter the pin using numbers below." > <br/>

                                <input type="button" name="btn1" value="1" id="one"  onclick="displaynum(btn1.value)"> &nbsp;
                                <input type="button" name="btn2" value="2" id="two" onclick="displaynum(btn2.value)"> &nbsp;
                                <input type="button" name="btn3" value="3" id="three" onclick="displaynum(btn3.value)"> &nbsp;
                                <input type="button" name="btn4" value="4" id="four" onclick="displaynum(btn4.value)">  &nbsp;
                                <input type="button" name="btn5" value="5" id="five" onclick="displaynum(btn5.value)"> &nbsp;


                            </div>
						</div> <br/>

						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Confirm 4 Digit Pin</label>
								<input type="password" id="repassword" name="con_psw"class="form-control" onkeydown="return false" title="Please enter the pin using numbers below."> <br/>

                                <input type="button" name="btn_1" value="1" id="one"  onclick="displaynumber(btn_1.value)"> &nbsp;
                                <input type="button" name="btn_2" value="2" id="two" onclick="displaynumber(btn_2.value)"> &nbsp;
                                <input type="button" name="btn_3" value="3" id="three" onclick="displaynumber(btn_3.value)"> &nbsp;
                                <input type="button" name="btn_4" value="4" id="four" onclick="displaynumber(btn_4.value)">  &nbsp;
                                <input type="button" name="btn_5" value="5" id="five" onclick="displaynumber(btn_5.value)"> &nbsp;
                                <input type="reset" name="reset" value="Reset" class="btn btn-success" style=" margin-left: 5px">
							</div>
						</div>



						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
                            </div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















