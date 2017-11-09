<?php  

$name = $_POST["reg_fname"];

$last_name = $_POST["reg_lname"];

$email = $_POST["reg_email"];

$bdate = $_POST["reg_bdate"];

$telnum = $_POST["reg_tnum"];

$gen = $_POST["reg_gender"];

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

	function addUser($email, $fname, $lname, $phone, $birthday, $gender, $password)
	{
		$sql = "select * from accounts where email = '$email'";
		$results = $this->connection->query($sql);
		if (count($results) == 0) {
			$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', 
		'$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$this->connection->query($sql);
		echo "Welcome 'fname' 'lname'!";
		}
		else{
			echo "User Already Exists";
		}
	}

}

$user1 = new User;

$user1->addUser(''.$email, ''.$name, ''.$last_name, ''.$telnum, ''.$bdate, ''.$gen, ''.$pass);

?>

<div>
    <h2 align="middle"><a href="signin.php">Log Out</a></h2>
</div>

<?php ?>