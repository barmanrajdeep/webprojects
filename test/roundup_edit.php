<?php
// This script is to edit roundup
?>
<!DOCKTYPE html>
<html>
  <head>
    <title>Roundup Edit</title>
    <style>
      label {width: 141px; display: inline-block; text-align: -webkit-right; text-align: right;}
      #submit {margin-left: 242px;}
    </style>
  </head>
  <body>
    <h3>Roundup Edit</h3>
    <?php
    //function to check value entered by user to be a valid ID
    function sanitizer($inputId)
    {
      preg_match("/([0-9]{6})(_)([a-zA-Z]{1,})/", $inputId, $inputId2);

      if ( !empty($inputId2) and is_numeric($inputId2[1]) and $inputId2[2] == '_' and is_string($inputId2[3]) )
      {
        return TRUE;
      }
      else
      {
        echo "<strong style='color: red'>Error: </strong>Please enter an ID which starts with six numeric values followed by underscore followed by string in the format example as shown --> 123456_ABC";
        return FALSE;
      }
    }

    if ( ( empty($_REQUEST['roundupId']) || (sanitizer($_REQUEST['roundupId']) == FALSE ) ) ):?>
      <form action="roundup_edit.php" method="get">
        <label for="Rid">Roundup Id</label>   <input id="Rid" name="roundupId" type="text"/><p></p>
        <input type="submit" value="submit" id="submit"/>
      </form>
    <?php else:?>
      <form>
        <label for="Name">Name</label>    <input id="Name" type="text"/><p></p>
        <label for="Author">Author</label>    <input id="Author" type="text"/><p></p>
        <label for="Summary">Summary</label>    <input id="Summary" type="textarea"/><p></p>
        <label for="ImageTag">Image Tag</label>   <input id="ImageTag" type="text"/><p></p>
        <label for="ImageDesc">Image Caption</label>    <input id="ImageDesc" type="text"/><p></p>
        <label for="RoundupTitle">Roundup Title</label>   <input id="RoundupTitle" type="text"/><p></p>
        <label for="RoundupDesc">Roundup Description</label>    <input id="RoundupDesc" type="text"/><p></p>
        <label for="RoundupTag">Roundup Tag</label>   <input id="RoundupTag" type="text"/><p></p>
        <label for="SourceTable">Source Table</label>   <input id="SourceTable" type="text"/><p></p>
        <label for="IDs">IDs</label>    <input id="IDs" type="text"/><p></p>
        <input type="submit" value="submit" id="submit"/>
      </form>
    <?php endif;?>
  </body>
</html>
<?php

  //connecting to the database
  $con = mysqli_connect('localhost','root','root','fullhyd_main');
  if (!$con)
  {
    die('Could not connect: ' . mysqli_error($con));
  }
?>
