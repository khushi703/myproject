<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login / Signup Page</title>
  </head>
  <body>
    <?php
    // Start a session
    session_start();

    // Check if the user is already logged in
    if (isset($_SESSION['user_id'])) {
      // Redirect the user to the dashboard page
      header('Location: dashboard.php');
      exit();
    }

    // Check if the user submitted the login form
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
      // Get the username and password from the form
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Check if the username and password are correct
      if ($username === 'admin' && $password === 'password') {
        // Set the user's ID in the session
        $_SESSION['user_id'] = 1;

        // Redirect the user to the dashboard page
        header('Location: dashboard.php');
        exit();
      } else {
        // Show an error message
        $login_error = "Invalid username or password";
      }
    }

    // Check if the user submitted the signup form
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
      // Get the username and password from the form
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Validate the input
      if (strlen($username) < 6) {
        $signup_error = "Username must be at least 6 characters";
      } elseif (strlen($password) < 8) {
        $signup_error = "Password must be at least 8 characters";
      } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Save the user to the database (or do whatever you need to do here)

        // Show a success message
        $signup_success = "Account created successfully";
      }
    }
    ?>
    <h2>Login</h2>
    <?php if (isset($login_error)) { echo "<p>$login_error</p>"; } ?>
    <form action="" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" name="login" value="Login">
    </form>
    <br>
    <h2>Signup</h2>
    <?php
    if (isset($signup_error)) { echo "<p>$signup_error</p>"; }
    elseif (isset($signup_success)) { echo "<p>$signup_success</p>"; }
    ?>
    <form action="" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" name="signup" value="Signup">
    </form>
  </body>
</html>
