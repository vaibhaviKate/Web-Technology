<?php

session_start();
if(isset($_SESSION['uid']))
{
	
	header('location : option.html');
}

?>


<html>
<head>
<title>
LOG IN
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
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
</head>
<body class="back">
<img src = "http://www.spit.ac.in/wp-content/uploads/2017/02/bhavans_logo.png" class="center" >
<h2 style = "text-align: center;margin :200px 0px 0px 0px; ">SPIT ADMIN LOGIN</h2>

<div class = "container-fluid ">
<div class = "row">
	<div class = "col-md-4 col-sm-4 col-xs-12"></div>
	<div class = "col-md-4 col-sm-4 col-xs-12 ">
		

			<form  method = "POST" class = "formdes">
				<div class="form-group">
					<label for="user">Username</label>
					<input type="text" class="form-control" id="user" placeholder="Enter username" name = "username" required>
				</div>
			  
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name = "password" required>
				</div>
				
				<div class = "form-group">
					<button type="submit" class="btn btn-success btn-block" name = "submit">Log In</button>
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
	
	$query = "SELECT * FROM `admin` WHERE `username` = '$user' AND `password` = '$pass';" ;
	$execute = mysqli_query($conn, $query);
	
	$result = mysqli_num_rows($execute);
	
	
	
	if($result == 1)
	{
		$data = mysqli_fetch_assoc($execute);
		$id = $data['ID'];
		session_start();
		$_SESSION['uid'] = $id;
		header('location:option.html');
	}
	else
	{
		?>
		<script>
				window.alert("Log in unsuccessful ! Enter valid username or password.");
			</script>
		
		<?php
		header('location : adminLogin.php');

	}
	mysqli_close($conn);
}

?>














</body>