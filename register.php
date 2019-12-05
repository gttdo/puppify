<?php
if(isset($_POST['loginButton'])){
  //Login button was pressed
  echo "login button was pressed!";
}
if(isset($_POST['registerButton'])){
  //Login button was pressed
  echo "login register button was pressed!";
}


?>

<!-- <!DOCTYPE html> -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Puppify</title>
  </head>
  <body>
    <div id="inputContainer">
      <form id="loginForm" class="" action="register.php" method="post">
        <h2>Login to your account</h2>
        <p>
          <label for="loginUsername">Username</label>
          <input id="loginUsername" type="text" name="loginUsername" value="" placeholder="e.g. Snoop Dog" required>
        </p>
        <p>
          <label for="loginPassword">Password</label>
          <input id="loginPassword" type="password" name="loginPassword" value="" placeholder="Your Password" required>
        </p>
        <button type="submit" name="loginButton">Login</button>
      </form>

      <form id="registerForm" class="" action="register.php" method="post">
        <h2>Create your free account</h2>
        <p>
          <label for="Username">Username</label>
          <input id="Username" type="text" name="Username" value="" placeholder="e.g. Snoop Dog" required>
        </p>
        <p>
          <label for="firstName">First Name</label>
          <input id="firstName" type="text" name="firstName" value="" placeholder="e.g. Bob" required>
        </p>
        <p>
          <label for="lastName">Last Name</label>
          <input id="lastName" type="text" name="lastName" value="" placeholder="e.g. Bobson" required>
        </p>
        <p>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" value="" placeholder="e.g. bob@bobson.com" required>
        </p>
        <p>
          <label for="email2">Confirm Email</label>
          <input id="email2" type="email" name="email2" value="" placeholder="e.g. bob@bobson.com" required>
        </p>
        <p>
          <label for="password">Password</label>
          <input id="password" type="password" name="password" value="" placeholder="Your Password" required>
        </p>
        <p>
          <label for="password2">Confirm Password</label>
          <input id="password2" type="password" name="password2" value="" placeholder="Re-enter Your Password" required>
        </p>
        <button type="submit" name="registerButton">Sign Up</button>
      </form>

    </div>
  </body>
</html>
