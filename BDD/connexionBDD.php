<?php

// Connexion à la BDD
$mysqlClient = new PDO(
  'mysql:host=localhost;dbname=gestionnotes;charset=utf8' ,
  'root' ,
  ''


);


try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=intranetmarie;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>