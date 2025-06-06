<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/includes';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="my coding projects.">
  <meta name="robots" content="index, follow">
  <title>bochard's projects list</title>
  <link rel="icon" type="image/ico" href="/images/">

  <link rel="stylesheet" href="/styles/root.css">
</head>
<body>
  <?php include_once($path . '/header.php');?>

  <main>
    <img src="/images/gifs/titles/projectspageburning.gif" class="page-title">
    <?php include_once($path . '/nav.php');?>
    <section style="text-align: center;">
      <h1>My projects' list</h1>
      <p>below are some of the coding projects I made, some of them are left unfinished.</p>
    </section>
    <section>
      <h2>self-learn</h2>
      <p>these ones are made for learning purpose.</p>
      <ul>
        <li>
          <a href="./palindrome-checker">palindrome checker</a>
          <p>this checks if a word is the same even when reversed, regardless of any punctuations.</p>
        </li>
        <li>
          <a href="./roman-numeral-converter">roman numeral converter</a>
          <p>converts integers to a roman type. for instance, "28" becomes "XXVIII".</p>
        </li>
        <li>
          <a href="./temperature-converter">temperature converter</a>
          <p>this one is actually inspired from a physics class in my 12th grade. our topic that time is about gas laws.</p>
        </li>
        <li>
          <a href="./simple-cash-register">temperature converter</a>
          <p>a cash register, the one you commonly see on malls and konbini.</p>
        </li>
        <li>
          <a href="./drum-ka-dum">drum ka dum!</a>
          <p>not that much, just a basic drum that uses a keyboard. (only works when you have keyboard)</p>
        </li>
        <li>
          <a href="./basic-calc">basic calc</a>
          <p>simple calculator. pls don't compare on ur phone calculator. i know, it's far from it xd.</p>
        </li>
      </ul>
    </section>
    <section>
      <h2>work related</h2>
      <p>websites I created for my clients.</p>
      <ul>
        <li>
          <a href="https://mohsinsolutions.com">Mohsin Business Solutions</a>
          <p>a simple landing page for Mohsin.</p>
        </li>
      </ul>
    </section>
  </main>

  <?php include_once($path . '/footer.php');?>
</body>
</html>