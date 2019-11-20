<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Knyght's Website</title>
  </head>

  <body>

    <?php include 'header.html'?>

    <form action="name.php" method="post">
      <h3>What is your Name?</h3>
      Name: <input type="text" name="userName" value="Type your name here">
      <h3>What is your email address?</h3>
      Email: <input type="email" name="userEmail" value="Type your email here">
      <input type="submit">
    </form>

    <?php

    function getName(){
      return $_POST['userName'];
    }

    function getEmail(){
      return $_POST['userEmail'];
    }

    $name = getName();
    $email = getEmail();

//    function getInfo(){
//      echo "Name: $name <br>";
//      echo "Email $email <br>";
//    }

    echo "<br>";
    echo "<h2>Your Information:</h2>";

    echo "Name: $name <br>";
    echo "Email $email <br>";

    ?>

    <?php include 'footer.html'?>
  </body>
</html>
