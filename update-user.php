<?php
include('User.php');
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
<body>
<form method="post">
<h1>Update User</h1>
<input type="hidden" name="next_action" value="addUser">
<input type="hidden" name="ip_update" value="">
<p align="left">First Name:<input type="text" name="FirstName" size="40"></br>
<p align="left">Last Name:<input type="text" name="LastName" size="40"></br>
<p align="left">Comment:</p><textarea name="comments" cols="40" rows="6" id="detail"></textarea></br>

<input type="submit" name="submit" value="Update">
</form>
</body>
</html>