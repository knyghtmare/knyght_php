<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="site.php" method=get>
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
        <br>

        <?php echo $_GET["num1"] + $_GET["num2"] ?>
    </form>
  </body>
</html>
