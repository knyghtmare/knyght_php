<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action="site4.php" method="post">
    Student: <input type="text" name="student"><br>
    <input type="submit">
  </form>

  <?php
    $grades = array("Jim" => "A+", "Omer" => "C+", "Josh" => "B");
    // Key-Value pairs:             Key   =>  Value
    // Keys have to be unique

    // $grades["Omer"] = "F";

    echo $grades[$_POST['student']];


  ?>

  </body>
</html>
