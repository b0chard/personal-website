<?php
  declare(strict_types=1);

  function outputUsername(){
    if(isset($_SESSION['user_id'])){
      echo "you are logged in as {$_SESSION['user_username']}";
    }
    else{
      echo 'you are not logged in.';
    }
  }

  function checkLoginErrors(){
    if(isset($_SESSION['login_errors'])){
      $errors = $_SESSION['login_errors'];

      echo '<br>';

      foreach($errors as $error){
        echo "$error<br>";
      }

      unset($_SESSION['login_errors']);
    }
    elseif(isset($_GET['login']) && $_GET['login'] === 'success'){
      echo 'login success!';
    }
  }