<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knyght learns php</title>
  </head>
  <body>

  <?php include 'header.html'?>

  <?php
  // classes
    class Book {
      var $title;
      var $author;
      var $pages;

      // constructor
      // function __construct(){
      //  echo "A New Book has been created! <br>";
      // }

      // better constructor
      // reason: saves space and time
      // since less lines of code are used

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }

      function set_title($title) {
          $this->title = $title;
        }
      function get_title(){
          return $this->title;
      }
    }

    // creating a book:
    $book1 = new Book("Fire and Blood", "George R R Martin", 700);
    
    // the following lines can edit existing parameters
    // in the object $book1

    // $book1->title = "Fire and Blood";
    // $book1->author = "George R R Martin";
    // $book1->pages = 700;

    // a second book
    $book2 = new Book("Lord of the Rings", "J R R Tolkien", 1200);
    // $book2->title = "Lord of the Rings";
    // $book2->author = "J R R Tolkien";
    // $book2->pages = 1200;

    // getting results
    echo "$book1->title <br>";
    echo "$book1->author <br>";
    echo "$book1->pages <br>";
    // second book
    echo "$book2->title <br>";
    echo "$book2->author <br>";
    echo "$book2->pages <br>";
  ?>

  <?php include 'footer.html'?>

  </body>
</html>
