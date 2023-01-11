<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <form action="signup-handler.php" method="post" onsubmit="return checkPassword()" id="signup-form">
            <h2>Sign Up</h2>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name = "username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name = "password" id="password" placeholder="Enter password">
              <small id="password-error" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirm Password</label>
              <input type="password" class="form-control" name = "confirm-password" id="confirm-password" placeholder="Confirm password">
              <small id="confirm-password-error" class="form-text text-danger"></small>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="index.php" class="btn btn-secondary">Log In</a>
        </form> 
    </body>
</html>