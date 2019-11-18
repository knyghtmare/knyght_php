<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action='site3.php' method='post'>
    Apple: <input type="checkbox" name="fruits[]" value="apples"><br>
    Orange: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type='submit'>
  </form>

  <?php

  // checkboxes
      $fruits = $_POST['fruits'];
      echo $fruits[1];
  ?>

  </body>
</html>
