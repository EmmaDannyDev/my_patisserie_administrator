<?php
  function listeProd($cnx)
  {
    $result = $cnx->query('SELECT * FROM produit');

    $data = $result->fetchAll();

    return $data;
  }
?>
