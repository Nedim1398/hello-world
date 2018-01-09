<?php
include('User.php');
$User= new User(0,'first','first','first');

echo "<table border='2'>
<tr>
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Comments</th>
<th>Update</th>
<th>Delete</th>
</tr>";

if($User->getNumOfUsers()>0)
{
	for($i=$User->currentLowestId();$i<$User->currentHighestId()+1;$i++){
		echo "<tr>";
		echo "<td>". $User->getUser($i)->getID()."</td>";
		echo "<td>". $User->getUser($i)->getFirstName()."</td>";
		echo "<td>". $User->getUser($i)->getLastName()."</td>";
		echo "<td>". $User->getUser($i)->getComment()."</td>";
		
/* 		echo"<td>".'<form action="update-user.php" method="post">
		<input name="id" type="hidden" value=""'.$User->getUser($i)->getID().'"/>
		<input type ="submit" value ="Update">
		</form>'."</td>"; */
		
/* 		echo"<td>".'<form action="delete-user.php" method="post">
		<input name="next_action" type="hidden" value="deleteUser"/>
		<input name="id_delete" type="hidden" value=""'.$User->getUser($i)->getID().'"
		/>
		<input type="submit" value="Delete">
		</form>'."<td>"; */
		
		echo "</tr>";
		
		
	}
}
echo"</table>";
?>
<html>
<h1>LIST OF USERS:</h1>
</html>

<?php
include('database.php');
?>
<html>
<body>
<form action="add-user.php">
<input type="submit" value="Add user">
</form>
</body>
</html>