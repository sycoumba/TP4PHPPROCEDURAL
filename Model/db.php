<?php

function getConnection()
{
$host= "localhost";
$dbuser="root";
$password="";
$dbname="banque_peuple2";
$dsn="mysql:dbname=".$dbname.";host=".$host;
try{
	$db=new PDO($dsn,$dbuser,$password);
	//On définit le mode d'erreur de PDO sur Exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $ex){
	die('error: '.$ex->getMessage());
}
return $db;
}

?>