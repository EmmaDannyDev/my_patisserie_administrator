<?php

  include '../modele/connexion_bdd.php';

  $cnx = connexion_bdd();

  function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
  {
    //Test1: fichier correctement uploadé
    if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;

    //Test2: taille limite
    if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;

    //Test3: extension
    $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
    if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;

    //Déplacement
    return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
  }

  $upload = upload('myFile','../assets/uploads/'.$_FILES['myFile']['name'], FALSE, array('png','gif','jpg','jpeg'));

  //VALEUR DE RETOUR
  if($upload)
  {
    echo $_FILES['myFile']['name'];
  }
  else {
    echo 'false';
  }


?>
