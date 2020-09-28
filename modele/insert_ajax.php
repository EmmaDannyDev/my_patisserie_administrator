<?php

  include '../modele/connexion_bdd.php';

  $cnx = connexion_bdd();

  //Insertion du produit
  $cnx->query('insert into produit(titre,sous_titre,description,img) values ("'.$_POST['titre'].'","'.$_POST['sous_titre'].'","'.$_POST['description'].'","'.$_POST['img'].'")');

  //Recupération de l'id du dernier produit
  $result = $cnx->query('select max(id) as id from produit');
  $data = $result->fetch();

  //On retourne l'id en text à "ajax.js"
  echo $data['id'];

?>
