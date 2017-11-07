<?php 
require 'user.php';

$u_email = $_POST["reg_email"];

$pass = $_POST["reg_pass"];

$user = new User;

$result = $user->checkUserEmail($u_email);

$result2 = $user->checkUserPassword($pass, $u_email);

if (count($result) > 0) {
	echo "No such account exists";

} 
/*elseif (count($row2) == 0) {
	echo "Wrong Password";
}
else {
	echo "Welcome 'lname' 'fname'";
}*/

?>

<div>
    <h2 align="middle">Return to <a href="signin.php">Sign In page</a></h2>
</div>

<?php ?>