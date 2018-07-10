<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel='stylesheet' href='styles/packages.processed.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<title>Document</title>
</head>
<body class="container">
	<?php
	if(isset($_GET['id'])){
		$city=$_GET['city'];
		$country=$_GET['country'];
		//query the database
	}
	 ?>
	<h1>Plan your escape</h1>
	<form class="form-group" action="packages.php" method="GET">
	<div class="row">
			<div class="col-md-5">
				<input type="text" class="form-control" name="city" placeholder="Mumbai" />
			</div>
			<div class="col-md-5">
				<input type="text" class="form-control" name="country" placeholder="India" />
			</div>
			<div class="col-md-2">
				  <a href="next.html"><button type="submit" class="btn btn-success">Search</button>
			</div>
	</div>
	</form>
	<div class='packages row'>
		<div class="box col-md-6"><img src="http://del-code.com/images/medium/beach/pexels-photo-132037.jpeg" alt="">
			<div class='overlay'>
				<h3> Andaman</h3>
			</div>
		</div>
		<div class="box col-md-6"><img src="http://del-code.com/images/medium/beach/pexels-photo-88212.jpeg" alt="">
			<div class='overlay'>
				<h3> Thailand </h3>
			</div>
		</div>
		<div class="box col-md-6"><img src="https://images.unsplash.com/photo-1455594408994-253112b1b26e?dpr=1&auto=compress,format&fit=crop&w=1650&h=&q=80&cs=tinysrgb&crop=" alt="">
			<div class='overlay'>
				<h3> London</h3>
			</div>
		</div>
		<div class="box col-md-6"><img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?dpr=1&auto=compress,format&fit=crop&w=1778&h=&q=80&cs=tinysrgb&crop=" alt="">
			<div class='overlay'>
				<h3> Dubai </h3>
			</div>
		</div>
		<div class="box col-md-6"><img src="https://images.unsplash.com/photo-1431274172761-fca41d930114?dpr=1&auto=compress,format&fit=crop&w=1650&h=&q=80&cs=tinysrgb&crop=" alt="">
			<div class='overlay'>
				<h3> Paris </h3>
			</div>
		</div>
	</div>
</body>
</html>
