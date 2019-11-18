<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      // Going to use this file to copy-paste everything from test-script
      // as some sort of cheatsheet for future reference

      echo "<h1>My Webpage</h1>";
      echo "<hr>";
      echo "<p>This webpage is mine!</p>";

      $characterName = "Jahin";
      $characterAge = 22;

      echo "<h3>About Me:</h3>";

      echo "My name is $characterName.<br>";
      echo "I am $characterAge years old.<br>";

      echo "<hr>";

      // data types
      // string
      $phrase = "Fire and Blood";
      // integer
      $age = 23;
      // decimal
      $gradepoint = 3.82;
      // boolean
      $isMale = True;

      /*
      We can use 'null' for booleans with
      no designated values
      */

      echo "$phrase <br>";
      // lower case
      echo strtolower($phrase);
      echo "<br>";

      // upper case
      echo strtoupper($phrase);
      echo "<br>";

      // str length
      echo strlen($phrase);
      echo "<br>";

      // String characters are indexed from 0 onwards
      echo $phrase[0];
      echo "<br>";

      // replace part of a string
      echo str_replace("Blood", "Ice", $phrase);
      echo "<br>";

      # substring substr(string, index, len)
      echo substr($phrase, 9, 4);
      echo "<br>";

      # php can do math operations
      # specify order of operations
      # with brackets
        echo 5 + 4 * 10;
        echo "<br>";
        echo (5 + 4)*10;

      # power
        echo "<br>";
        echo pow(2, 4);
        echo "<br>";
      # square root
        echo sqrt(4);
        echo "<br>";

      # max
        echo max(2, 10);
        echo "<br>";
        echo min(10, 2);
        echo "<br>";

      # rounding
        echo floor(3.90);
        echo "<br>";
     ?>

  </body>
</html>
