<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>circle</title>
</head>
<body>
  <h1>find the circumference, area, and volume of a circle base on its radius.</h1>
  <form action="" method="GET">
    <label for="radius">what is the radius:</label>
    <input type="value" name="radius" id="radius" required>
    <input type="submit" value="calculate">
  </form>
  <?php include './calculate.php';?>
</body>
</html>