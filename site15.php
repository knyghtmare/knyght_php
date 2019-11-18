<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knyght learns php</title>
  </head>
  <body>

  <?php include 'header.html'?>

  <?php
    class Movie {
      // public keyword is commonly used
      // isntead of the var keyword
      public $title;
      // private : only accessible within
      // the class
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->setRating($rating);
      }

      // setter function
      function setRating($rating) {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
      // getter function
      function getRating(){
        return $this->rating;
      }
    }

    // rating: G, PG, PG-13, R, NR
    $movie1 = new Movie("Joker", "R");
    echo $movie1->getRating();
  ?>

  <?php include 'footer.html'?>

  </body>
</html>
