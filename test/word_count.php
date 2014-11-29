<?php
// Give a character count for submitted text
?>
<!DOCKTYPE html>
<html>
  <head>
    <title>
    </title>
    <script src="word_count.js"></script>
  </head>
  <body>
    <form method="post" action="word_count.php">
      <label for="it" style='vertical-align: top;'>Text:&nbsp;</label>
      <textarea name="inputText" id="para" rows="23" cols="110"></textarea><p></p>
      <input onclick="cc(); return false;" type="submit" value="Submit"/>
    </form>
  </body>
</html>
