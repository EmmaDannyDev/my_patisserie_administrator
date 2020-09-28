<?php
  include '../modele/connexion_bdd.php';
  include '../modele/produit.php';

  $cnx = connexion_bdd();

  //Affichage des produits
  $produits = listeProd($cnx);
  include '../vue/index.php';

?>
