<?php
include('User.php');
if(isset($_POST['next_action'])){
$User = new User(0,'first','first','first');
$User->save($POST['id_add'],$_POST['FirstName'],$_POST['LastName'],$_POST['comments'],1);
header('Location:list.php');
}
?>

<html>
<body>
<form method="post">
<h1>Add User</h1>
<input type="hidden" name="next_action" value="addUser">
<p align="left">First Name:<input type="text" name="FirstName" size="40"></br>
<p align="left">Last Name:<input type="text" name="LastName" size="40"></br>
<p align="left">Comment:</p><textarea name="comments" cols="40" rows="6" id="detail"></textarea></br>

<input type="submit" name="submit" value="Insert">
</form>
</body>
</html>