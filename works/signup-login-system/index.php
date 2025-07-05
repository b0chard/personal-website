<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  require_once 'includes/config_session.php';
  require_once 'includes/signup_view.php';
  require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup & login system</title>
</head>
<body>
  <h1>signup & login system</h1>
  <p>
    <?php
      outputUsername();
    ?>
  </p>

  <?php
    if(!isset($_SESSION['user_id'])){ ?>
      <h2>login</h2>
      <form action="includes/login.php" method="POST">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="pwd" placeholder="password"><br>
        <button type="submit">login</button>
      </form>
  <?php } ?>

  <?php
    checkLoginErrors();
  ?>

  <h2>signup</h2>
  <form action="includes/signup.php" method="POST">
    <?php
      signupHTMLInputs();
    ?>
    <button type="submit">signup</button>
  </form>

  <?php
    checkSignupErrors();
  ?>

  <h2>logout</h2>
  <form action="includes/logout.php" method="POST">
    <button type="submit">logout</button>
  </form>
</body>
</html>