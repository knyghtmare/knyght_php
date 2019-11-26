<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student List</title>
  </head>
  <body>

    <?php

    $students = [
        ['name' => 'Google',   'gender' => 'M'],
        ['name' => 'Facebook', 'gender' => 'F'],
        ['name' => 'Youtube',  'gender' => 'M'],
        ['name' => 'Pondit',   'gender' => 'M'],
        ['name' => 'BITM',     'gender' => 'M'],
        ['name' => 'Yahoo',    'gender' => 'F']
    ];

    // state the student lists
    $theBoys = [];
    $theGirls = [];
    $counterBoys = 1;
    $counterGirls = 1;

    foreach ($students as $student){
        if ($student['gender'] == 'M'){
            $theBoys[$counterBoys] = $student['name'];
            $counterBoys = $counterBoys + 1;
        } else {
            $theGirls[$counterGirls] = $student['name'];
            $counterGirls = $counterGirls + 1;
        };
    }

    echo "<h3>Male Students</h3>";
    for ($x = 0; $x < count($theBoys);){
      echo ++$x.". ".$theBoys[$x].'<br>';
    }

    echo "<hr/>";

    echo "<h3>Female Students</h3>";

    for ($y = 0; $y < count($theGirls);){
      echo ++$y.". ".$theGirls[$y].'<br>';
    }

    echo "<hr/>";

     ?>

  </body>
</html>
