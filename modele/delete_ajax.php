<?php
  include '../modele/connexion_bdd.php';

  $cnx = connexion_bdd();

  $cnx->query('delete from produit where id ='.$_GET['id']);

  unlink("../assets/uploads/".$_GET['img']);

?>
