<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=CV;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

 ?>
