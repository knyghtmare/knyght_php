<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knyght learns php</title>
  </head>
  <body>

  <?php
    // loops
    $index = 1;
    // while loop
    while ($index <= 5) {
      echo "$index <br>";
      // if this is not included,
      // it will be an infinite loop
      $index++;
    }
    $index = 1;
    // do-while loop
    do{
      echo "$index <br>";
      $index++;
    }while ($index <= 5);
    // for loop
    // serves a specific purpose
    for($i = 1; $i <= 5; $i++){
      echo "$i <br>";
    }
    // for arrays
    $luckyNumbers = array(4, 8, 16, 24, 32, 64);
    for ($i = 0; $i <= count($luckyNumbers); $i++){
      echo "$luckyNumbers[$i] <br>";
    }
  ?>

  </body>
</html>
