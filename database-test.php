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
echo "Rows: " . $db->rowCount();
var_dump($db->single());

$db->query("SELECT * FROM tbl_test where id = :id");
$db->bind(':id', 2);
var_dump($db->single());
 ?>
