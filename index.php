<?php
  $parts = $_SERVER['DOCUMENT_ROOT'] . '/parts';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="/images/icons/favicon.ico">

  <title>bochard's net home</title>
  <meta name="description" content="Welcome to my net home! this website are my space to show my hobbies, thoughts, and other fun stuffs. I am an 18 years old who learned how to code just by myself. Hope you enjoy visiting my site! :)">

  <!-- stylesheet/s i use -->
  <link rel="stylesheet" href="/stylesheets/root.css">
</head>
<body>    
  <table>
    <tr>
      <?php include_once($parts . '/sidebar.php');?>
      
      <!-- ...and this is for the content -->
      <td id="body">
        <img src="/images/gifs/bulblights.gif" alt="bulb lights" width="100%">
        <h1>welcome to bochard's net home!</h1>
        <p>i don't really have much to say. but try to explore the site. it is not big but, i like it. it is my corner of the internet. here you can see what i usually do, some fun things, and my thoughts to certain topics. hope you'll have some fun! :&rpar;</p>
        <hr>
        <p>If you want to continue viewing my site. Please consider disabling your adblocker. some cool stuffs cannot be seen if you enable that thing. tnx. and...if you got lost for some reason. just go the homepage!</p>
      </td>
    </tr>
  </table>
  
  <!-- site meter for people who found this place -->
  <script data-goatcounter="https://bochard.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
</body>
</html>
