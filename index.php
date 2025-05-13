<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/includes';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/ico" href="/images/">

  <title>bochard's net home</title>
  <meta name="description" content="Welcome to my net home! this website are my space to show my hobbies, thoughts, and other fun stuffs. I am a 17 year old Filipino who learned how to code just by myself. Hope you enjoy visiting my site! :)">
  <meta property="og:title" content="bochard's net home">
  <meta property="og:description" content="I code on paper and create websites out of it.">
  <meta property="og:image" content="/images/">

  <link rel="stylesheet" href="/styles/root.css">
<style>
  h1 {
    font-size: 40px;
  }
  p {
    font-size: 20px;
  }
  section {
    margin-top: 40px;
  }
  h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  table {
    width: 100%;
    margin: 0 auto;
  }
  table, th, td {
    border: 1px solid #000000;
  }
  th, td {
    font-size: 18px;
    padding: 6px;
  }
</style>
</head>
<body>
<?php include_once($path . '/header.php');?>

  <main>
    <img src="/images/gifs/titles/homepageburning.gif" class="page-title">
    <?php include_once($path . '/nav.php');?>
    <section style="text-align: center;">
      <h1>You found my net home!</h1>
      <p>Hi! welcome to my net home.</p>
      <p>i have nothing to say yet. writing intro is hard. sorry! 😢😭</p>
    </section>

    <section>
      <div style="text-align: center;">
        <iframe src="https://bochard.atabook.org/" style="width: 100%; height: 700px" frameBorder="0">Your web browser is not compatible to iframe.</iframe>
      </div>
    </section>
  </main>

  <?php include_once($path . '/footer.php');?>
</body>
</html>