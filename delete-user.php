<?php

include('User.php');

if(isset($_POST['next_action'])) {

	$User = new User(0,'first','first','first');
	$User->delete($_POST['id_delete']);
	//echo "Test";
	header('Location: list.php');


}

?>