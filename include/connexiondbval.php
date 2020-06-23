<?php

$servername = "db5000303630.hosting-data.io";
$username = "dbu526536";
$password = "7f,7]WCg";
$dbname = "dbs296617";

//try   {
  // Je me connecte à ma bdd
  //$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  //return $bdd;
//}catch(Exception $e)
//{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        //die('Erreur : '.$e->getMessage());
//}

try   {
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=localhost:3308;dbname=rde", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}

?>