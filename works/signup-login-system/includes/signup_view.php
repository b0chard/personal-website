<?php
  declare(strict_types=1);

  function signupHTMLInputs(){
    //USERNAME
    if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['signup_error']['username_taken'])){
      echo "<input type=\"text\" name=\"username\" placeholder=\"username\" value=\"{$_SESSION['signup_data']['username']}\"><br>";
    }
    else{
      echo '<input type="text" name="username" placeholder="username"><br>';
    }

    //PASSWORD
    echo '<input type="password" name="pwd" placeholder="password"><br>';

    //EMAIL
    if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['signup_error']['email_used']) && !isset($_SESSION['signup_error']['email_invalid'])){
      echo "<input type=\"text\" name=\"email\" placeholder=\"email\" value=\"{$_SESSION['signup_data']['email']}\"><br>";
    }
    else{
      echo '<input type="text" name="email" placeholder="email"><br>';
    }
  }

  function checkSignupErrors(){
    if(isset($_SESSION['signup_errors'])){
      $errors = $_SESSION['signup_errors'];

      echo '<br>';

      foreach($errors as $error){
        echo "$error<br>";
      }

      unset($_SESSION['signup_errors']);
    }
    elseif(isset($_GET['signup']) && $_GET['signup'] === 'success'){
      echo '<br>';
      echo 'signup success!';
    }
  }