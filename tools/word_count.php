<?php
// Give a character count for submitted text
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Tools
    </title>
    <script src="word_count.js"></script>
  </head>
  <body>
      <label for="it" style='vertical-align: top;'>Text:&nbsp;</label>
      <textarea name="inputText" id="para" rows="23" cols="110"></textarea><p></p>
      <button onclick="cc()">Character Count</button>
      <button onclick="words()">Comma separated values Count</button>
    </form>
  </body>
</html>
