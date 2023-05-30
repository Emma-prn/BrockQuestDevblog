<?php
  try {
    $link = new PDO('mysql:host=hostname;dbname=dbname','username', 'password');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
?>
