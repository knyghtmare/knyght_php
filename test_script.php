<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <form action="test_script.php" method="get">

       Name: <input type='text' name="name">
       <br>
       Age: <input type='number' name="age">

       <input type='submit'>

     </form>
     <br>
     Your Name is <?php echo $_GET['name'] ?>
     <br>
     Your Age is <?php echo $_GET['age'] ?>
     <br>

  </body>
</html>
