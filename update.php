<html>
<head>
<title>
ADMIN
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<style>
.formdes 
{
	margin : 20px 0px 0px 0px;
	padding: 20px;
	border-width : 5px;
	border-style : ridge;
	border-radius : 10px;
}
.center 
{
	margin : 30px 0px -50px 0px;
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
<h2 style = "text-align: center;margin :100px 0px 0px 0px; ">UPDATE STUDENT DATA</h2>

<div class = "container-fluid ">
<div class = "row">
	<div class = "col-md-4 col-sm-4 col-xs-12"></div>
	<div class = "col-md-4 col-sm-4 col-xs-12 ">


	<form  method = "POST" class=" formdes">
		<div class="form-group">
			<label for="uid">ORIGINAL UID</label>
			<input type="text" class="form-control" id="uid" placeholder="Enter UID" name = "uid" required>
		</div>
		
		<div class="form-group">
			<label for="first">NEW FIRST NAME</label>
			<input type="text" class="form-control" id="first" placeholder="Enter first name" name = "fname" required>
		</div>
	  
		<div class="form-group">
			<label for="last">NEW LAST NAME</label>
			<input type="text" class="form-control" id="last" placeholder="Enter last name" name = "lname" required>
		</div>
		
		<div class="form-group">
			<label for="year">NEW COURSE YEAR</label>
			<!--<input type="text" class="form-control" id="year" placeholder="Enter course year" name = "year" required>-->
			<select class= "selectpicker form-control" name = "year" required>
				<optgroup>
					<option>FE</option>
					<option>SE</option>
					<option>TE</option>
					<option>BE</option>
					<option>FY MCA</option>
					<option>SY MCA</option>
				</optgroup>
			</select>
		</div>
		
		<div class="form-group">
			<label for="course">NEW COURSE</label>
			<!--<input type="text" class="form-control" id="course" placeholder="Enter course" name = "course" required>-->
			<select class= "selectpicker form-control" name = "course" required>
				<optgroup>
					<option>COMPUTER</option>
					<option>I.T.</option>
					<option>EXTC</option>
					<option>ETRX</option>
					<option>MCA</option>
					</optgroup>
			</select>
		</div>
		
		<div class = "form-group">
			<button type="submit" class="btn btn-success btn-block" name = "submit">UPDATE</button>
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
	$f = $_POST['fname'];
	$l = $_POST['lname'];
	$u = $_POST['uid'];
	$cy = $_POST['year'];
	$c = $_POST['course'];
	$query = "UPDATE `st_info` set `f_name`='$f' ,`l_name`='$l',`uid`='$u',`year`='$cy',`course`='$c' WHERE `uid`='$u';" ;
	$execute = mysqli_query($conn, $query);	
	
	$row = mysqli_affected_rows($conn);
	
	if($row == 1)
	{
		echo'
		<script>
				alert("Data updated successfully.");
				window.open("option.html", "_self");
		</script>';
		
		

	}
	else
	{
		?>
		<script>
				window.alert("UID does not exist.");		
		</script>
		<?php
	}
	mysqli_close($conn);
}

?>
</body>
</html>