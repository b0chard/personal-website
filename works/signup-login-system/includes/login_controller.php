<?php
  declare(strict_types=1);

  function isInputEmpty(string $username, string $pwd){
    $whichEmpty = "";

    if(empty($username) && empty($pwd)){
      $whichEmpty = 'all inputs';
    }
    elseif(empty($username)){
      $whichEmpty = 'username input';
    }
    elseif(empty($pwd)){
      $whichEmpty = 'password input';
    }
    else{
      return false;
    }

    return "$whichEmpty has no filled data.";
  }

  function doesUsernameNotMatch(bool|array $username){
    if(!$username){
      return true;
    }
    else{
      return false;
    }
  }

  function doesPasswordNotMatch(string $pwd, string $hashedPwd){
    if(!password_verify($pwd, $hashedPwd)){
      return true;
    }
    else{
      return false;
    }
  }