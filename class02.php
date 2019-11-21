<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php - Class 2</title>
  </head>
  <body>

  <h1>PHP-class 2</h1>
  <hr>

  <?php
  // code whatever you want here
    $num1 = 10;
    $num2 = 20;

    // could have easily done this
    // with function but a procedural
    // method is fastest

    $summation = $num1 + $num2;
    $difference = $num2 - $num1;
    $quotient = $num2 / $num1;
    $product = $num2 * $num1;
    $grandSummation = $summation + $difference + $product + $quotient;

    // the output

    echo "$num1 + $num2 = $summation <br>";
    echo "$num2 - $num1 = $difference <br>";
    echo "$num2 / $num1 = $quotient <br>";
    echo "$num2 X $num1 = $product <br>";
    echo "<hr>";
    echo "Total = $grandSummation <br>";

  ?>

  </body>
</html>
