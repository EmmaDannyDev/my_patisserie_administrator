<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>My Pâtisserie - Administrator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

  </head>
  <body>

    <header>
      <div class="container-fluid">
        <h1 class="text-center">My Pâtisserie <small>Administrator</small></h1>
      </div>

    </header>

    <div class="container">
      <div class="row">

        <!-- FORMULAIRE AJAX -->
        <div class="col-xs-12 col-md-6">

          <h1 class="text-center">Ajouter un produit</h1>
          <hr>

          <form id="formulaire" method="POST" action="" enctype="multipart/form-data">

            <!-- TITRE -->
            <div class="form-group row center-block text-center">
              <label for="titre">Titre</label><br>
              <input type="text" class="form-control center-block" id="titre" name="titre" required>
            </div>

            <!-- SOUS-TITRE -->
            <div class="form-group row center-block text-center">
              <label for="sous-titre">Sous-titre</label>
              <input type="text" class="form-control center-block" id="sous_titre" name="sous_titre" required>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group row center-block text-center">
              <label for="description">Description</label>
              <textarea id="description" class="form-control center-block" name="description" rows="8" required></textarea>
            </div>

            <!-- IMAGE FILE -->
            <br>
            <div class="form-group row center-block text-center">
              <label for="form_file">Image  - Extension ( png, gif, jpg, jpeg ) </label>
              <input id="file_select" type="file" class="form-control-file center-block" name="myFile" required>
            </div>

            <!-- MESSAGE INFO (SUCCESS OR ERROR) -->
            <div id="msg_info"></div>

            <button type="submit" class="btn btn-primary center-block">Envoyer</button>

            <br>

          </form>
          <!-- LISTE PRODUITS ADMIN -->
          <h1 class="text-center">Suppression</h1>
          <hr>
          <div id="list_group_prod" class="list-group">
            <?php
              foreach ($produits as $p)
              {
                echo
                '
                  <a href="#" class="list-group-item" data-id="'.$p['id'].'">
                    <div class="row">
                      <div id="block_img_list_group" class="col-xs-3 col-sm-2 col-md-3 text-center">
                        <img src="../assets/uploads/'.$p['img'].'" width="100px" height="100px" alt="'.$p['img'].'">
                      </div>
                      <div id="block_content_list_group" class="col-xs-8 col-sm-9 col-md-8">
                        <h4 class="list-group-item-heading">'.$p['titre'].' <small>'.$p['sous_titre'].'</small> </h4>
                        <p class="list-group-item-text">'.$p['description'].'</p>
                      </div>
                      <div id="block_delete_button" class="col-md-1 pull-right">
                        <span class="glyphicon glyphicon-remove delete_button" aria-hidden="true" value="'.$p['id'].'" data-img="'.$p['img'].'"></span>
                      </div>
                    </div>
                  </a>
                ';
              }
            ?>
          </div>
        </div>

        <!-- LISTE PRODUITS -->
        <div class="col-xs-12 col-md-6">
          <div id="block_list_prod" class="row">
            <h1 class="text-center">Boutique</h1>
            <hr>
            <?php
              foreach ($produits as $p)
              {
                echo
                '
                  <div class="col-md-6" data-id="'.$p['id'].'">
                    <div class="thumbnail">
                      <img src="../assets/uploads/'.$p['img'].'" alt="'.$p['img'].'" width="250px">
                      <div class="caption">
                        <h3>'.$p['titre'].' <br> <small>'.$p['sous_titre'].'</small></h3>
                        <p class="more">'.$p['description'].'</p>
                      </div>
                    </div>
                  </div>
                ';
              }
            ?>
          </div>
        </div>

      </div>
    </div>

    <footer>
      <p class="text-center">Copyright © 2018 Danny EMMA</p>
    </footer>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/more_link.js"></script>

  </body>
</html>
