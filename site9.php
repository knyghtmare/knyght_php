<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form action='site9.php' method="post">
    What is your Grade?
    Grade: <input type="text" name="grade"><br>
    <input type="submit">
  </form>

  <?php
    $grade = $_POST['grade'];
    
    echo "Remarks:<br>";
    switch ($grade) {
      case "A":
        echo "Congratulations! You have exceptionally well!";
        break;
      case "B":
        echo "You got an average grade.";
        break;
      case "C":
        echo "You could have done better.";
        break;

      default:
        echo "Unidentified Grade.";
        break;
    }
  ?>

  </body>
</html>
