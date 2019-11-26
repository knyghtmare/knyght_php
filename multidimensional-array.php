<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php homework</title>
  </head>
  <body>
    <?php

    // HOMEWORK ASSIGNMENT

    /*

    Okay, since key 'name'
    was the same for all external
    and internal arrays, it was causing
    a plethora of errors.

    The obvious fix was modifying the key names
    for 'name' in all the arrays
    */

    $departments = [
                        [
                            'name' => 'cse',
                            'students' => [
                                     [
                                             'name' => 'Pondit',
                                             'subjects' => [
                                                 [
                                                     'name' => 'Programming In C',
                                                     'mark' => 50,
                                                 ],
                                                 [
                                                     'name' => 'Computer Fundamental',
                                                     'mark' => 60,
                                                 ],
                                                 [
                                                     'name' => 'Engineering Mathematics',
                                                     'mark' => 30,
                                                 ]
                                             ]
                                     ],
                                     [
                                         'name' => 'BITM',
                                         'subjects' => [
                                             [
                                                 'name' => 'Programming In C',
                                                 'mark' => 60,
                                             ],
                                             [
                                                 'name' => 'Computer Fundamental',
                                                 'mark' => 40,
                                             ],
                                             [
                                                 'name' => 'Engineering Mathematics',
                                                 'mark' => 45,
                                             ]
                                         ]
                                     ]
                                 ]
                        ],
                        [
                            'name' => 'bba',
                            'students' => [
                                [
                                    'name' => 'Google',
                                    'subjects' => [
                                        [
                                            'name' => 'Gmail',
                                            'mark' => 80,
                                        ],
                                        [
                                            'name' => 'Youtube',
                                            'mark' => 85
                                        ],
                                        [
                                            'name' => 'Facebook',
                                            'mark' => 78,
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'BITM',
                                    'subjects' => [
                                        [
                                            'name' => 'Programming In C',
                                            'mark' => 60,
                                        ],
                                        [
                                            'name' => 'Computer Fundamental',
                                            'mark' => 40,
                                        ],
                                        [
                                            'name' => 'Engineering Mathematics',
                                            'mark' => 45,
                                        ]
                                    ]
                                ]
                            ]
                        ]
                   ];

                   ///////Output

                   //1. Department : cse
                   //   Students : 1. Name : Pondit
                   //                 Subjects : 1. name : Programming In C
                   //                              mark : 50
                   //                            2. name : Computer Fundamental
                   //                               marks : 60
                   //               2. Name : BITM
                   //                 Subjects : 1. name : Programming In C
                   //                              mark : 60
                   //                            2. name : Computer Fundamental
                   //                               marks : 40
                   //
                   //2. Department : XXXX ...............

    // to get the desired output, we have to make
    // a LOT of nested foreach loops
    // this is just absurd!
    // After trying for 4 effing hours
    // I have realised that i had to use
    // multiple if/else conditionals here too
    // pretty tricky

    $i = 0;
    $j = 1;
    $k = 1;
    foreach ($departments as $department){
        $i = $i + 1;
        foreach ($department as $key1 => $values1){
            if ($key1 == 'name'){
                echo "$i. Department : $values1 <br>";
            } else {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "Students: ";
                foreach ($values1 as $value1){
                      foreach ($value1 as $key2 => $values2){
                            if (($key2 == 'name') && ($j == 1)) {
                                echo "$j. Name: $values2 <br>";
                                $j = $j + 1;
                            } elseif (($key2 == 'name') && ($j != 1)) {

                                /*
                                Had to do a LOT of
                                trial and error to
                                get the correct positions of
                                everything
                                 */

                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "$j. Name: $values2 <br>";
                                $j = $j + 1;
                            } else {
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo "Subjects: ";
                                foreach ($values2 as $value2){
                                    foreach ($value2 as $key3 => $values3){
                                        if (($key3 == 'name') && ($k == 1)) {
                                            echo "$k. Name : $values3 <br>";
                                            $k = $k + 1;
                                        } elseif (($key3 == 'name') && ($k != 1)) {
                                            // Yes, all these are white spaces
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                            echo "$k. Name : $values3 <br>";
                                            $k = $k + 1;
                                        } else {
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                            echo "Marks : $values3 <br>";
                                            // $k shall not be changed in this case
                                            // since this just prints out the 'marks'
                                            // $status = ($values3 < 40) 'Failed':'Passed';
                                            echo str_repeat("&nbsp;", 44);
                                            if ($values3 < 40){
                                                 echo "Status : Failed<br>";
                                            } else {
                                                 echo "Status : Passed<br>";
                                            }
                                      };
                                  }
                            }
                            // reset value of $k
                            $k = 1;
                      };
                  };
                }
                // reset $j to 1 again
                $j = 1;
            };
        }
// This was not required
//        echo "<hr/>";
// However, this was:
    echo "<br>";
    }
    ?>

    <!-- Sir's solution
    <hr/>
    <h3>Sir's Solution</h3>
    <hr/>
    -->

    <?php
/*
    $s1 = 0;
    foreach ($departments as $department){
      echo ++$s1.'. Department: '.$department['name'].'<br>';
      $studentsS1 = 0;
      echo "Students : ";
      foreach ($department['students'] as $student){
        echo ++$studentS1['name'].'. Name : '.$student['name'].'<br>';
        $subjectS1 = 0;
        foreach ($student['subjects'] as $subject){
          echo ++$subjectS1.'. Name : '.$subject['name'].'<br>';
          echo 'Mark: '.$subject['mark'].'<br>';
        }
      }
    }
*/
    ?>


  </body>
</html>
