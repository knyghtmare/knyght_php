<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action='site8.php' method="post">
    First Number: <input type="number" step="0.1" name="num1"><br>
    Operation: <input type='text' name="op"><br>
    Second Number: <input type="number" step="0.1" name="num2"><br>
    <input type="submit">
  </form>

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operand = $_POST["op"];

    function addNumbers($num1, $num2){
      return $num1 + $num2;
    }
    function subNumbers($num1, $num2){
      return $num1 - $num2;
    }
    function productNumbers($num1, $num2){
      return $num1 * $num2;
    }
    function divideNumbers($num1, $num2){
      return $num1 / $num2;
    }

    if ($operand == "+"){
      echo addNumbers($num1, $num2);
    } elseif ($operand == "-") {
      echo subNumbers($num1, $num2);
    } elseif ($operand == "*") {
      echo productNumbers($num1, $num2);
    } elseif ($operand == "/") {
      echo divideNumbers($num1, $num2);
    } else {
      echo "Input for Operand not recognised!";
    }

    ?>

  </body>
</html>
