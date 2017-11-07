<?php 
//require 'pdo.php';

$link = mysql_connect('sql2.njit.edu', 'ne58', '7ir1qWL9P');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully'."<br>";

$u_email = $_POST["reg_email"];

$pass = $_POST["reg_pass"];

$result = mysql_query("SELECT fname, lname FROM accounts WHERE email = '$u_email' AND password = '$pass'");

/*while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	printf("Welcome %s %s", $row['fname'], $row['lname']);
}*/

while ($row = mysql_fetch_assoc($result)) {
    echo $row['fname'];
    echo $row['lname'];
}

mysql_close($link);

?>

<div>
    <h2 align="middle"><a href="signin.php">Log Out</a></h2>
</div>

<?php ?>