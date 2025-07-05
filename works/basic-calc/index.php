<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic php calculator</title>
</head>
<body>
  <h1>basic php calculator</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <input type="text" id="num1" name="num1" placeholder="e.g. 1">
    <select name="operator" id="operator">
      <option value="add" selected>Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <input type="text" id="num2" name="num2" placeholder="e.g. 2">
    <button type="submit">Calculate</button>
  </form>

  <?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
      $num1 = htmlspecialchars($_GET["num1"]);
      $num2 = htmlspecialchars($_GET["num2"]);
      $operator = htmlspecialchars($_GET["operator"]);

      // check if inputs has data
      if(empty($num1) && empty($num2)){
        echo "fill in all fields.";
        exit();
      } elseif(empty($num1)){
        echo "first input is empty.";
        exit();
      } elseif(empty($num2)){
        echo "second input is empty.";
        exit();
      }

      // check if input data are numerical
      switch(true){
        case !is_numeric($num1) && !is_numeric($num2):
          echo "both inputs contain non-numeric data.";
          break;
        case !is_numeric($num1):
          echo "first input contains non-numeric data.";
          break;
        case !is_numeric($num2):
          echo "second input contains non-numeric data.";
          break;
        default:
          calculate($num1, $num2, $operator); // proceed to calculate
      }
    }

    function calculate($num1, $num2, $operator){
      $resultCateg = "";
      $resultVal = "";

      switch($operator){
        case "add":
          $resultVal = $num1 + $num2;
          $resultCateg = "sum";
          break;
        case "subtract":
          $resultVal = $num1 - $num2;
          $resultCateg = "difference";
          break;
        case "multiply":
          $resultVal = $num1 * $num2;
          $resultCateg = "product";
          break;
        case "divide":
          $resultVal = $num1 / $num2;
          $resultCateg = "quotient";
          break;
        default:
          echo "something went wrong!";
          return;
      }

      echo "The {$resultCateg} is \"{$resultVal}\"";
    }
  ?>
</body>
</html>