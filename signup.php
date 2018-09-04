<html>
<head>
<style>

.formdes 
{
	margin : 50px 0px 0px 0px;
	padding: 20px;
	border-width : 5px;
	border-style : ridge;
	border-radius : 10px;
}
.center 
{
	margin : 100px 0px -150px 0px;
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 7%;
}
.back
{
	background-image : url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3WkIgKZFjgvodZt0C9eqaktNVtFWRBeYChoMgn3vMxd-kB5sk") ;
	background-size : cover;
	
	
}

</style>


<title>
Sign Up
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</head>
<body class="back">
<img src = "http://www.spit.ac.in/wp-content/uploads/2017/02/bhavans_logo.png" class="center" >
<h2 style = "text-align: center;margin :200px 0px 0px 0px; ">SPIT ADMIN SIGN UP</h2>
<div class = "container-fluid ">
<div class = "row">
	<div class = "col-md-4 col-sm-4 col-xs-12"></div>
	<div class = "col-md-4 col-sm-4 col-xs-12 ">
		

			<form method = "POST" class = "formdes">
				<div class="form-group">
					<label for="user">Username</label>
					<input type="text" class="form-control" id="user" placeholder="Enter username" name = "username" required>
				</div>
			  
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name = "password" required>
				</div>
				
				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name = "cpass" required>
				</div>
				
				<div class = "form-group">
					<button type="submit" class="btn btn-primary btn-block" name = "submit">Submit</button>
				</div>
			</form>
		
	</div>
	<div class = "col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>
<?php

include('connection.php');

if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($_POST['cpass'] == $_POST['password'])
	{
		$query = "insert into admin(username, password) values('$user', '$pass');";
		$execute = mysqli_query($conn, $query);
		
		if($execute)
				?>
			<script>
				window.alert("Signup successful !");
			</script>
			
			<?php
				 header('location:adminLogin.php');
	}
	else
		echo '<script>window.alert("Password did not match !")</script>';
	mysqli_close($conn);
}
?>
	
	
	
















</body>