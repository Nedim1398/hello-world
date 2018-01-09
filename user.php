<?php
include('database.php');

Class User {
	public $id, $firstName, $lastName, $comment;

	//objekat
	public function __construct($id, $fname, $sname, $comment){
		$this->id         = $id;
		$this->firstName  = $fname;
		$this->lastName   =	$sname;
		$this->comment 	  = $comment;
	}

	public function getID(){
		return $this->id;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function getComment(){
		return $this->comment;
	}

	public static function getUser($id) {
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$sql = "SELECT * FROM student WHERE id =".$id." ORDER BY id ASC";
		$query = $conn->prepare($sql);
		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_LAST);
		if(!$row)
		{
			die('nothing found');
		}
		$temp = new User($row['id'], $row['firstname'], $row['lastname'], $row['comment']);
		return $temp; 
	}

	public function delete($id) {
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$sql = "DELETE FROM student WHERE id =".$id." ";
		$query = $conn->prepare($sql);
		$query->execute();
	}

	public function save ($id, $first_name, $last_name, $comment, $next_action){
		$new_id = $this->currentHighestId()+1;
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$statement = $conn->prepare("
			INSERT INTO student(id,firstname,lastname,comment) 
			VALUES(:id, :firstname, :lastname, :comment)");

		$statement->execute(array(
			"id" 		=> $new_id,
			"firstname" => $first_name, 
			"lastname"	=> $last_name,
			"comment"	=> $comment,
		));
	}

	public static function currentHighestId(){
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$sql = "SELECT * FROM student ORDER BY id DESC";
		$query = $conn->prepare($sql);
		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_LAST);
		return $row['id'];
	}

	public function getNumOfUsers(){
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$sql = "SELECT * FROM student ORDER BY id ASC";
		$query = $conn->prepare($sql);
		$query->execute();
		return ($query->rowCount());
	}

	public static function currentLowestId(){
		$conn = new PDO("mysql:host=localhost; dbname=ipia", "root", "");
		$sql = "SELECT * FROM student ORDER BY id ASC";
		$query = $conn->prepare($sql);
		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_LAST);
		return $row['id'];
	}

}

?>