<?php

require_once('Database.php');

$db = new Database();

echo $db->isConnected() ? "DB Connected".PHP_EOL : "DB Not Connected".PHP_EOL;

if ( !$db->isConnected() ) {
    # code...
    echo $db->getError().'<br>';
    die("Unable to connect to database");
}

$db->query("SELECT * FROM students");
var_dump( $db->getResults() );
echo "<br>";
echo "Rows: ".$db->rowCount()."<br>";
var_dump($db->single());
echo "<br>";

$db->query("SELECT * FROM students where student_id = :id");
$db->bind(':id', 3);
var_dump($db->single());
 ?>
