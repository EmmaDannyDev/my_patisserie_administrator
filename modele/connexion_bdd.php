<?php
  function connexion_bdd()
  {
    try
    {
    	// On se connecte à MySQL
    	$bdd = new PDO('mysql:host=localhost;dbname=my_patisserie_administrator;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
    	// En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
    }
    return $bdd;
  }
?>
