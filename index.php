<?php 
echo "Hello! ";
echo "</br>";

//$db_connection = ("host=localhost port=5433 dbname=TransferXml user=postgres password=postgres");
//$myPDO = new PDO('pgsql:host=localhost ,port=5433 ,dbname='TransferXml' ,user='postgres' ,password='postgres'');
//$db_connection = pg_connect("host=localhost dbname=TransferXml  user=postgres password=postgres");
// 'config.php';
include_once('connection.php'); 

try {
	$dsn = "pgsql:host=$host;port=5433;dbname=$db;";
	// make a database connection
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	die($e->getMessage());
} finally {
	if ($pdo) {
		$pdo = null;
	}
}

// if ($db_connection){
//     echo "</br>";

//     echo "connected";
// }
// else {
   

//     echo "not connected";
//     echo "</br>";
// }
//Reading XML file and change it to json format
$xml = simplexml_load_file('books.xml');
$json = json_encode($xml);

$array = json_decode($json,TRUE);
$array = array($xml->getName() => $array);

 print_r($array);
 echo "</br>";





?>