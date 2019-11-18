<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knyght learns php</title>
  </head>
  <body>

  <?php include 'header.html'?>

  <?php
  // object functions
    class Student{
      var $name;
      var $major;
      var $cgpa;

      function __construct($studentName, $studentMajor, $studentCGPA){
        $this->name = $studentName;
        $this->major = $studentMajor;
        $this->cgpa = $studentCGPA;
      }

      function hasHonours() {
        if ($this->cgpa >= 3.50) {
          /*
             strings intentionally given as
             a boolen to show us a result when
             we use the echo
          */
          return "True";
        } else {
          return "False";
        }
      }
    }

    $student1 = new Student("Ishty", "ENV",  3.52);
    $student2 = new Student("Mayel", "CSE",  3.49);
    $student3 = new Student("Mahnaz", "EEE", 3.22);

    echo $student1->hasHonours();

  ?>

  <?php include 'footer.html'?>

  </body>
</html>
