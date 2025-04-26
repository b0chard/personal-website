<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/includes';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="useful links.">
  <meta name="robots" content="index, follow">
  <title>some useful resources</title>
  <link rel="icon" type="image/ico" href="/images/">

  <link rel="stylesheet" href="/styles/root.css">
</head>
<body>
  <?php include_once($path . '/header.php');?>

  <main>
    <img src="/images/gifs/titles/linkspageburning.gif" class="page-title">
    <?php include_once($path . '/nav.php');?>
    <section style="text-align: center;">
      <h1>Some useful links.</h1>
      <p>Sorry, nothing to see here yet :&lt;</p>
    </section>
  </main>

  <?php include_once($path . '/footer.php');?>
</body>
</html>