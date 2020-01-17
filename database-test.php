<?php

require_once('Database.php');

$db = new Database();

echo $db->isConnected() ? "DB Connected".PHP_EOL : "DB Not Connected".PHP_EOL; 

if ( !$db->isConnected() ) {
    # code...
    echo $db->getError();
    die("Unable to connected to database");
}

$db->query("SELECT * FROM testtable");
var_dump( $db->getResults() );

 ?>