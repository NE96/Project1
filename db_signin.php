<?php 

$u_email = $_POST["reg_email"];

$pass = $_POST["reg_pass"];

class User
{
	function __construct()
	{
		$hostname = "sql2.njit.edu";
		$username = "ne58";
		$password = "7ir1qWL9P";
		$conn = new PDO("mysql:host=$hostname;dbname=ne58",
		$username, $password);
		$this->connection = $conn;
		echo "Connected Successfully"."<br>"; 
	}

	function signIn($email, $password)
	{	
		$this->email = $email;
		$this->password = $password;
		$sql = "select * from accounts where email = ".$this->email." and password = ".$this->password;
		$results = $this->connection->query($sql);
		if (count($results) == 0){
			echo "The password is wrong or this account does not exist";
		}
		else {
			$row = mysql_fetch_assoc($results);
			echo "Welcome ".$row['fname']." ".$row['lname']."!";
		}
	}
}

$user1 = new User;

$user1->signIn(''.$u_email, ''.$pass);

?>

<div>
    <h2 align="middle"><a href="signin.php">Log Out</a></h2>
</div>

<?php ?>