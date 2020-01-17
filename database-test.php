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

 ?>
