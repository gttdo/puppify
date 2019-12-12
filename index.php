
<?php

include("includes/config.php");

// session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];
} else{
  header("Location: register.php");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Hello World
  </body>
</html>
