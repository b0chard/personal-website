<?php
  $radius = $_GET["radius"] ?? 0;
  $circumference = round(2 * pi() * $radius, 2);
  $area = round(pi() * pow($radius, 2), 2);
  $volume = round((4 / 3) * pi() * pow($radius, 3), 2);

  echo "<br>If radius of the circle is {$radius}<br>";
  echo "&nbsp;&nbsp;&nbsp;Its circumference would be: {$circumference}cm <br>";
  echo "&nbsp;&nbsp;&nbsp;Its area would be: {$area}cm<sup>2</sup> <br>";
  echo "&nbsp;&nbsp;&nbsp;Its volume would be: {$volume}cm<sup>3</sup>";
?>