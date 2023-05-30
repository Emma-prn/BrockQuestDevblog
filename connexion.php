<?php
  try {
    $link = new PDO('mysql:host=localhost;dbname=mieko','root', '');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
?>