<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <form action="login.php" method="post" id="login-form" onsubmit="return checkCredentials()">
      <h2>Log In</h2>
      <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="uname" id="name" placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="show-password" onclick="togglePasswordVisibility()">
        <label class="form-check-label" for="show-password">Show password</label>
      </div>
      <button type="submit" class="btn btn-primary">Log In</button>
      <a href="signup.php" class="btn btn-secondary">Sign Up</a>
    </form> 
  </body>
</html>