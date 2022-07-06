<?php
$host = "localhost";
$port = "5433";
$dbname = "TransferXml";
$user = "postgres";
$password = "249 "; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string); 
if ($db_conn){
    echo "</br>";

    echo "connected";
}
else {
   

    echo "not connected";
    echo "</br>";
}

?>