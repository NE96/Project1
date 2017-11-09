<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
	<div class="container">
      <form action="db_signin.php" method="post">
        <div class="form-signin">
          <h2 class="form-signin-heading">Sign In</h2>
          <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email" name="reg_email" 
          required />
          <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name="reg_pass" 
          required />
          <br />
          <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Submit</button>
        </div>
      </form>
    </div>

    <div>
    	<h2 align="middle">Return to <a href="index.php">Sign Up page</a></h2>
    </div>
<body>

</body>
</html>