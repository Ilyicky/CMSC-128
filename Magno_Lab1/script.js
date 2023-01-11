function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("show-password");
  
    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }

  function isStrongPassword(password) {
    var strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return strongPasswordRegex.test(password);
  }
  
  function checkPassword() {
    var password = document.getElementById("password").value;
    if (!isStrongPassword(password)) {
      document.getElementById("password-error").innerHTML = "Your password must be at least 8 characters long and contain at least 1 capital letter, 1 number, and 1 symbol.";
      return false;
    }
  
    var confirmPassword = document.getElementById("confirm-password").value;
    if (password !== confirmPassword) {
      document.getElementById("confirm-password-error").innerHTML = "The password and confirm password fields do not match.";
      return false;
    }
  
    return true;
  }

  function checkCredentials() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Check if the username and password are valid
    if (username === "test" && password === "test") {
      // Redirect to the home page
      window.location.href = "/home";
    } else {
      // Display an error message
      alert("Invalid username or password");
    }
    return false;
  }

  function startInactivityTimer() {
    // Set the time for inactivity
    var time = 1 * 60 * 1000; // 5 minutes in milliseconds
  
    // Set up the timer
    var idleInterval = setInterval(function() {
      // If the user has been idle for the specified time
      if (idleTime >= time) {
        // Log out the user
        window.location.href = "logout.php";
        // Display an alert indicating that the session has expired
        alert("Your session has expired due to inactivity. Please log in again to continue using the system.");
      }
    }, 1000); // Check every 1 second
  
    // Reset the idle time whenever the user moves the mouse or types
    $(this).mousemove(function (e) {
      idleTime = 0;
    });
    $(this).keypress(function (e) {
      idleTime = 0;
    });
  }