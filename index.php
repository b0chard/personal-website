<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= '/includes';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="/images/icons/favicon.ico">

  <title>bochard's net home</title>
  <meta name="description" content="Welcome to my net home! this website are my space to show my hobbies, thoughts, and other fun stuffs. I am an 18 years old who learned how to code just by myself. Hope you enjoy visiting my site! :)">

<!-- some styles, i want to keep the site simple. -->
  <link rel="stylesheet" href="/styles/root.css">
<style>
html, body {
  height: 100%;
  width: 100%;
}
body {
  font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
  margin: 0 auto;
}
table {
  height: 100%;
  width: 100%;
}
.sidebar {
  background-image: url(./images/backgrounds/backgroundclouds.gif);
  background-repeat: repeat-y;
  vertical-align: top;
  height: 100%;
  width: 120px;
  padding: 15px 10px;
}
.sidebar > ul {
  list-style-type: none;
  margin-top: 0;
  padding-left: 15px;
}
.sidebar p {
  margin-bottom: 5px;
}
.sidebar a {
  text-decoration: none;
  color: inherit;
}
.sidebar-footer {
  width: 10px;
}
.body {
  vertical-align: top;
  padding-left: 15px;
}
.content-wrap {
  width: 700px;
  padding: 0 10px;
}
</style>
</head>
<body>    
  <table> 
    <tr>
      <!-- this is for the sidebar -->
      <td class="sidebar">
        <p><strong>Site Menu</strong></p>
        <ul>  
          <li><a href="/">home</a></li>
          <li><a href="./about-me.php">about bochard</a></li>
          <li><a href="./files">my files</a></li>
          <li><a href="mailto:mail@tenkyuu.dev">email me</a></li>
        </ul>
        
        <hr>
        <!-- cute badges and other cool things goes here -->
          <!-- hitwebcounter Code START -->
          <a href="https://www.hitwebcounter.com" target="_blank"><img src="https://hitwebcounter.com/counter/counter.php?page=20998791&style=0019&nbdigits=5&type=ip&initCount=231" title="Counter Widget" Alt="Visit counter For Websites"   border="0" /></a>
        <a href="http://www.anybrowser.org/campaign/"><img src="/images/gifs/badges/anybrowser.gif" alt="Viewable With Any Browser" width="100"></a>
        <script data-goatcounter="https://bochard.goatcounter.com/count" async src="//gc.zgo.at/count.js"></script>
      </td>
      
      <!-- ...and this is for the content -->
      <td class="body">
        <div class="content-wrap">
          <h1>welcome to bochard's net home!'</h1>
          <p>i don't really have much to say. but try to explore the site. it is not big but, i like it. it is my corner of the internet. here you can see what i do, some fun things, and my thoughts to certain topics. hope you'll have fun! :&rpar;</p>
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
