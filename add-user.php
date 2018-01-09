<?php 

include('User.php');
if(isset($_POST['next_action'])){
	$User = new User(0,'first','first','first');
	$User->save($POST['id_add'], $_POST['FirstName'],$_POST['LastName'],$_POST['comments'],1);
	header('Location: list.php');
}

?>


<html>
<head>
	<title>Add User</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">

	<form method="post">
		<h1>Add User</h1>
		<input type="hidden" name="next_action" value="addUser">

		<p align="left">First Name:</p>
		<input class="form-control" type="text" name="FirstName" size="40"></br>
		<p align="left">Last Name:</p>
		<input class="form-control" type="text" name="LastName" size="40"></br>
		<p align="left">Comment:</p>
		<textarea class="form-control" name="comments" cols="40" rows="6" id="detail"></textarea></br>

		<input class="btn btn-info" type="submit" name="submit" value="Insert">
	</form>
	</div>

</body>
</html>