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
      <h2>my projects</h2>
      <p>these are my proudly made practice projects, hope you like it!</p>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th colspan="2">Links</th>
            <th>Description</th>
            <th>Creation Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>palindrome checker</td>
            <td>
              <a href="/projects/palindrome-checker/" target="_blank">click here</a>
            </td>
            <td>
              <a href="https://github.com/b0chard/palindrome-checker.git" target="_blank">view code</a>
            </td>
            <td>this checks if a word inputted by the user is a palindrome (the word looks the same even when backwards!).</td>
            <td>unknown</td>
          </tr>
          <tr>
            <td>roman numeral converter</td>
            <td>
              <a href="/projects/roman-numeral-converter/" target="_blank">click here</a>
            </td>
            <td>
              <a href="https://github.com/b0chard/roman-numeral-converter.git" target="_blank">view code</a>
            </td>
            <td>you know those X, I, C, M numbering stuffs? ye, this tool converts the numbers into those.</td>
            <td>unknown</td>
          </tr>
          <tr>
            <td>temperature converter</td>
            <td>
              <a href="/projects/temperature-converter/" target="_blank">click here</a>
            </td>
            <td>
              <a href="https://github.com/b0chard/temperature-converter.git" target="_blank">view code</a>
            </td>
            <td>ive been inspired to create this tool because of our physics class topic about gas laws lol.</td>
            <td>unknown</td>
          </tr>
          <tr>
            <td>tick clock</td>
            <td>
              <p>null</p>
            </td>
            <td>
              <a href="https://github.com/b0chard/tick-clock.git" target="_blank">view code</a>
            </td>
            <td>nothing much, just a buggy clock made from css, i hate css.</td>
            <td>unknown</td>
          </tr>
          <tr>
            <td>drum ka dum</td>
            <td>
              <a href="/projects/drum-ka-dum/" target="_blank">click here</a>
            </td>
            <td>
              <a href="https://github.com/b0chard/drum-ka-dum.git" target="_blank">view code</a>
            </td>
            <td>drum but using keys from ur keyboard</td>
            <td>unknown</td>
          </tr>
          <tr>
            <td>simple cash register</td>
            <td>
              <a href="/projects/simple-cash-register/" target="_blank">click here</a>
            </td>
            <td>
              <a href="https://github.com/b0chard/simple-cash-register.git" target="_blank">view code</a>
            </td>
            <td>a cash register (idk how to explain, but, as the name explains a cash register).</td>
            <td>unknown</td>
          </tr>
        </tbody>
      </table>
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