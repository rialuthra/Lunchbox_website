<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lunch box</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="stylee.css"/>
        <script>
          
			
			// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img src="product_images/Lunch_Box_Logo.PNG" style="height: 35px"></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php?#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
			</ul>
           
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>

	<div class="container-fluid">

		<div class="row">
            <form action="feedbck.php" method="post" name="feedback">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Feedback</div> 
					    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Message Box</b> </div>
                </div>

            </div>

            <div class="panel-body">
                     <div class="col-md-12">
                        <textarea class="form-control" name="message" style="width: 100%; height: 120px;"></textarea>

                     </div>
            </div>
        </div>
					<div class="panel-body">
						<div class="row">
                            <div class="col-md-4 col-xs-2" style="text-align: center; font-family: "Helvetica Neue">
                            <h3>SATISFIED</h3>
                        </div>
							<div class="col-md-4 col-xs-2" style="text-align: center; font-family: "Helvetica Neue">
                                <h3>NEUTRAL</h3>
                            </div>

							<div class="col-md-4 col-xs-2" style="text-align: center; font-family: "Helvetica Neue">
                                <h3>UNSATISFIED</h3>
                             </div>
                    </div>

        </div>
						
                            <div class="row">
							<div id="myDIV">
							
                               
								 <div class="col-md-4 col-xs-2" style="text-align: center;">
                                 
                                    <button class="btn" name="satisfied">
                                    <img src="product_images/hap.png" height="160px" width="170px" />
                                    </button>
                                 </div>


                                <div class="col-md-4 col-xs-2" style="text-align: center;">
                                   <button class="btn" name="neutral">
                                    <img src="product_images/neut.png" height="160px" width="170px" />
                              </button>
								</div>
								 
									<div class="col-md-4" style="text-align: center;">
									<button class="btn" name="unsatisfied">
                                    <img src="product_images/sad.png"height="160px" width="170px" />
									</button>
									</div>			
                            </div>
                        </div>
        <p><br/></p>    
        </form>
    </div>

			<div class="col-lg-12">
                <div class="panel-footer"></div>
            </div>
			
		</div>


</body>	
</html>











		