<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knyght learns php</title>
  </head>
  <body>

  <?php include 'header.html'?>

  <?php
  // inheritance
    class Chef {
      function makeChicken() {
        echo "The chef makes fried chicken. <br>";
      }
      function makeSalad() {
        echo "The chef makes a bowl salad. <br>";
      }
      function makeSpecialdish() {
        echo "The chef makes bbq ribs. <br>";
      }
    }

    class ItalianChef extends Chef {
      function makePizza() {
        echo "The chef makes pepperoni pizza. <br>";
      }
      function makeSpecialdish() {
        echo "The chef makes pasta. <br>";
      }
    }

    $chef1 = new Chef;
    $chef2 = new ItalianChef;

    
  ?>

  <?php include 'footer.html'?>

  </body>
</html>
