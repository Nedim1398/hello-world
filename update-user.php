<?php include('User.php');

if(isset($_POST['next_action'])){

	echo "</br>";	
	echo $_POST['FirstName']; 
	
	echo "</br>";
	echo $_POST['LastName'];

	echo "</br>";
	echo $_POST['comments'];

	echo "</br>";

}

?>

<html>
<head>
	<title>Update User</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">

	<form method="post">
		<h1>Update User</h1>
		<input type="hidden" name="next_action" value="addUser">

		<p align="left">First Name:</p>
		<input class="form-control" type="text" name="FirstName" size="40"></br>
		<p align="left">Last Name:</p>
		<input class="form-control" type="text" name="LastName" size="40"></br>
		<p align="left">Comment:</p>
		<textarea class="form-control" name="comments" cols="40" rows="6" id="detail"></textarea></br>

		<input class="btn btn-info" type="submit" name="submit" value="Update">
	</form>
	</div>

</body>
</html>