<?php
if ( isset($_GET) && !empty($_GET) ) {

  $sum = $_GET['a'] . $_GET['b'];

}
?>


<!DOCKTYPE html>
<html>
  <head>
    <style>
      body {font-size: 18px; color: blue;}
    </style>
  </head>
  <body>
    <form method="GET" action="lesson2.php">
      <!-- Firstname:<input type="text" name="firstname"/><p></p>
      Lastname:<input type="text" name="lastname"/><p></p>
      Age:<input type="text" name="age" /><p></p>
      Sex:<input type="radio" name="sex" value="male">Male&nbsp;<input type="radio" name="sex" value="none">Female<p></p>
      <input type="submit" name="smallform" value="submit"/><p></p> -->
      value 1: <input type="text" name="a" /><p></p>
      value 2:<input type="text" name="b" /><p></p>
      <input type="submit" value="submit"/><p></p>
    </form>
    <p>The result is:<span><?php if ( isset($sum) && $sum != "") {echo $sum;} ?></span></p>
  </body>
</html>
