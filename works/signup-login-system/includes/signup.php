<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
      require_once 'db_conn.php';
      require_once 'signup_model.php';
      require_once 'signup_view.php';
      require_once 'signup_controller.php';

      //ERROR HANDLING
      $errors = [];
      $inputEmptyMsg = isInputEmpty($username, $pwd, $email);

      if($inputEmptyMsg){
        $errors['input_empty'] = $inputEmptyMsg;
      }
      elseif(isEmailInvalid($email)){
        $errors['email_invalid'] = 'your email is invalid.';
      }
      elseif(isUsernameTaken($pdo, $username)){
        $errors['username_taken'] = 'that username is already taken';
      }
      elseif(isEmailRegistered($pdo, $email)){
        $errors['email_used'] = 'email has already been used.';
      }

      //START SESSION
      require_once 'config_session.php';

      if($errors){
        $_SESSION['signup_errors'] = $errors;

        $signupData = [
          'username' => $username,
          'email' => $email
        ];
        $_SESSION['signup_data'] = $signupData;

        header('Location: ../index.php');
        die();
      }

      createUser($pdo, $pwd, $username, $email);

      header('Location: ../index.php?signup=success');

      $pdo = null;
      $stmt = null;

      die();
    }
    catch(PDOException $e){ //CATCH FOR ERRORS
      die("query failed: {$e->getMessage()}");
    }
    
  }
  else{ //GO BACK
    header('Location: ../index.php');
    die();
  }