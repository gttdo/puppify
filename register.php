<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name){
    if(isset($_POST[$name])){
      echo $_POST[$name];
    }
  }
?>

<!-- <!DOCTYPE html> -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Puppify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
  </head>
  <body>
    <?php
      if(isset($_POST['registerButton'])){
        echo '    <script>
            $(document).ready(function(){
              $("#loginForm").hide();
              $("#registerForm").show();
            });
            </script>';
      } else{
        echo '    <script>
            $(document).ready(function(){
              $("#loginForm").show();
              $("#registerForm").hide();
            });
            </script>';
      }
     ?>

    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
          <!-- Login Form  -->
          <form id="loginForm" class="" action="register.php" method="post">
            <h2>Login to your account</h2>
            <p>
              <?php echo $account->getError(Constants::$loginFailed); ?>
              <label for="loginUsername">Username</label>
              <input id="loginUsername" type="text" name="loginUsername" value="<?php getInputValue('loginUsername') ?>" placeholder="e.g. Snoop Dog" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input id="loginPassword" type="password" name="loginPassword" value="" placeholder="Your Password" required>
            </p>
            <button type="submit" name="loginButton">LOG IN</button>
            <div class="hasAccountText">
              <span id="hideLogin">Don't have an account yet? Signup here.</span>

            </div>
          </form>

          <!-- Register Form -->
          <form id="registerForm" class="" action="register.php" method="post">
            <h2>Create your free account</h2>
            <p>
              <?php echo $account->getError(Constants::$usernameCharacters); ?>
              <?php echo $account->getError(Constants::$usernameTaken); ?>
              <label for="Username">Username</label>
              <input id="Username" type="text" name="Username" value="<?php getInputValue('Username') ?>" placeholder="e.g. Snoop Dog" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$firstNameCharacters); ?>
              <label for="firstName">First Name</label>
              <input id="firstName" type="text" name="firstName" value="<?php getInputValue('firstName') ?>" placeholder="e.g. Bob" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$lastNameCharacters); ?>
              <label for="lastName">Last Name</label>
              <input id="lastName" type="text" name="lastName" value="<?php getInputValue('lastName') ?>" placeholder="e.g. Bobson" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
              <?php echo $account->getError(Constants::$emailInvalid); ?>
              <?php echo $account->getError(Constants::$emailTaken); ?>
              <label for="email">Email</label>
              <input id="email" type="email" name="email" value="<?php getInputValue('email') ?>" placeholder="e.g. bob@bobson.com" required>
            </p>
            <p>
              <label for="email2">Confirm Email</label>
              <input id="email2" type="email" name="email2" value="<?php getInputValue('email2') ?>" placeholder="e.g. bob@bobson.com" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
              <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
              <?php echo $account->getError(Constants::$passwordsCharacters); ?>
              <label for="password">Password</label>
              <input id="password" type="password" name="password" value="" placeholder="Your Password" required>
            </p>
            <p>
              <label for="password2">Confirm Password</label>
              <input id="password2" type="password" name="password2" value="" placeholder="Re-enter Your Password" required>
            </p>
            <button type="submit" name="registerButton">Sign Up</button>

            <div class="hasAccountText">
              <span id="hideRegister">Already have an account? Log in here.</span>

            </div>
          </form>
        </div>

        <div id="loginText">
          <h1>Get Puppify, <br>right now!</h1>
          <h2>Great ambient music for your furry friend</h2>
          <ul>
            <li><i class="icons8-checkmark"></i> Discover music that your pooch will fall in love with</li>
            <li><i class="icons8-checkmark"></i> Create a soothing playlist for your pup</li>
            <li><i class="icons8-checkmark"></i> Follow artist to keep up to date</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
