<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href=".css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <form action="db_signup.php" method="post">
        <div class="form-signin">
          <h2 class="form-signin-heading">Sign Up</h2>
          <input type="text" id="inputFirstname" class="form-control" placeholder="Enter Firstname" name="reg_fname" required />
          <input type="text" id="inputLastname" class="form-control" placeholder="Enter Lastname" name="reg_lname"
          required />
          <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email" name="reg_email" 
          required />
          <input type="date" id="inputBdate" class="form-control" placeholder="Enter Birthdate" name="reg_bdate" 
          required />
          <input type="tel" id="inputTelnum" class="form-control" placeholder="Enter Telephone Number" name="reg_tnum" 
          required />
          <input type="text" id="inputGender" class="form-control" placeholder="Enter Gender" name="reg_gender" 
          required />
          <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name="reg_pass" 
          required />
          <br />
          <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Register</button>
        </div>
      </form>
    </div>

    <div>
      <h2 align="middle">Or <a href="signin.php">Sign In</a> if you already have an account.</h2>
    </div>

  </body>
</html>