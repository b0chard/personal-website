<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try{
      require_once 'db_conn.php';
      require_once 'login_model.php';
      require_once 'login_controller.php';

      //ERROR HANDLING
      $errors = [];
      $inputEmptyMsg = isInputEmpty($username, $pwd);

      $result = getUser($pdo, $username);
      
      if($inputEmptyMsg){
        $errors['input_empty'] = $inputEmptyMsg;
      }
      elseif(doesUsernameNotMatch($result)){
        $errors['login_incorrect'] = 'incorrect login info.';
      }
      elseif(doesPasswordNotMatch($pwd, $result['pwd'])){
        $errors['login_incorrect'] = 'incorrect login info.';
      }

      //START SESSION
      require_once 'config_session.php';

      if($errors){
        $_SESSION['login_errors'] = $errors;

        $signupData = [
          'username' => $username,
          'email' => $email
        ];
        $_SESSION['signup_data'] = $signupData;

        header('Location: ../index.php');
        die();
      }

      $newSessionId = session_create_id();
      $sessionId = "{$newSessionId}_{$result['id']}";
      session_id($sessionId);

      $_SESSION['user_id'] = $result['id'];
      $_SESSION['user_username'] = htmlspecialchars($result['username']);

      $_SESSION['last_regeneration'] = time();

      header('Location: ../index.php?login=success');
      $pdo = null;
      $stmt = null;
      die();
    }
    catch(PDOException $e){
      die("query failed: {$e->getMessage()}");
    }
  }
  else{
    header('Location: ../index.php');
    die;
  }