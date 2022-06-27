<?php 
echo "Hello! ";
echo "</br>";

//$db_connection = ("host=localhost port=5433 dbname=TransferXml user=postgres password=249 ");
//$myPDO = new PDO('pgsql:host=localhost ;port=5433 ,dbname='TransferXml' ,user='postgres' ,password='249' ');
$db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=249 ");

if ($db_connection){
    echo "</br>";

    echo "connected";
}
else {
   

    echo "not connected";
    echo "</br>";
}
//Reading XML file and change it to json format
$xml = simplexml_load_file('books.xml');
$json = json_encode($xml);
$array = json_decode($json,TRUE);
// echo "Json Array";
// print_r($array);
// echo "</br>";
foreach($array as $key => $value)
{
    echo "{$key}:{$value}";
    
  //echo $key." has the value". $value."</br>";
}


?>