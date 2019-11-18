<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php

    $isMale = True;
    $isTall = True;

    if ($isMale && $isTall){
      echo "You are a tall Guy.";
    } elseif ($isMale){
      echo "You are a Guy";
    } else {
      echo "You are a Girl.";
    }

  ?>

  </body>
</html>
