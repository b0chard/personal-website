<?php
  declare(strict_types=1);

  function isInputEmpty(string $username, string $pwd, string $email){
    $whichEmpty = "";

    if(empty($username) && empty($pwd) && empty($email)){
      $whichEmpty = 'all inputs';
    }
    elseif(empty($username)){
      $whichEmpty = 'username input';
    }
    elseif(empty($pwd)){
      $whichEmpty = 'password input';
    }
    elseif(empty($email)){
      $whichEmpty = 'email input';
    }
    else{
      return false;
    }

    return "$whichEmpty has no filled data.";
  }

  function isEmailInvalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    else{
      return false;
    }
  }

  function isUsernameTaken(object $pdo, string $username){
    if(getUsername($pdo, $username)){
      return true;
    }
    else{
      return false;
    }
  }

  function isEmailRegistered(object $pdo, string $email){
    if(getEmail($pdo, $email)){
      return true;
    }
    else{
      return false;
    }
  }

  function createUser(object $pdo, string $pwd, string $username, string $email){
    setUser($pdo, $pwd, $username, $email);
  }