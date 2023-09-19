<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #19325f;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<link rel="stylesheet" href="v3.css">
<script src="https://kit.fontawesome.com/acb6219ac5.js" crossorigin="anonymous"></script>
</head>
<body>
  <section>
    <nav>
        <div class="logo">
            <img src="photo\logo.png">

        </div>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>

            <li><a href="explore.php">EXPLORE MORE</a></li>
            <li><a href="review.php">REVIEW</a></li>
            <li><a href="login1.php">LOG IN</a></li>
            
            <!-- <li><a href="team.html">TEAM</a></li> -->
        </ul>
        <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>

        </div>
    </nav>
</section>
<section>

<form action="home.php">
  <div class="container">
    <h1>Sign in</h1>
    
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Sign in</button>
  </div>
  <form action="login.php">
  <div class="container signin">
    <p>Already have an account? <button type="submit" class="registerbtn">Log in</button></p>
  </div>
</form>

</body>
</html>