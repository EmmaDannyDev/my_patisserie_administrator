$(document).ready(function(){
  $(function(){

    //-- FORM SUBMIT LISTENER
    $('#formulaire').submit(function(e)
    {

      e.preventDefault();
      var donnees = $(this).serialize();
      var form = $('form').get(0);
      var formData = new FormData(form);

      //-- APPEL AJAX UPLOAD
      $.ajax({
        type		: 'POST',
        url		: '../modele/upload.php',
        data		: formData,
        dataType	: 'text',
        processData: false,
        contentType: false,
        success: function(false_or_img)
        {
          //ON BLOQUE L'INSERTION SI "upload.php" RETURN FALSE
          if(false_or_img == 'false')
          {
            $("#msg_info").append("<div class='alert alert-danger' role='alert'>Le produit n'a pas pu être enregistré !</div>");
            setTimeout(function(){ $(".alert").remove(); },3000);
          }
          else
          {
            //-- APPEL AJAX AJOUT PRODUIT
            $.ajax(
            {
              url : '../modele/insert_ajax.php',
              type : 'POST',
              data : donnees+'&img='+false_or_img,
              dataType : 'text',
              success: function(data_id, statut)
              {
                //AJOUT CONTENU
                $("#block_list_prod").append("<div class='col-md-6' data-id='"+data_id+"'><div class='thumbnail'><img src='../assets/uploads/"+false_or_img+"' alt='"+false_or_img+"' width='250px' height='200px'><div class='caption'><h3>"+titre.value+"<br> <small>"+sous_titre.value+"</small></h3><p>"+description.value+"</p></div></div></div>");
                $("#list_group_prod").append("<a href='#' class='list-group-item' data-id='"+data_id+"'><div class='row'><div id='block_img_list_group' class='col-xs-3 col-sm-2 col-md-3'><img src='../assets/uploads/"+false_or_img+"' alt='"+false_or_img+"' width='100px' height='100px'></div><div id='block_content_list_group' class='col-xs-8 col-sm-9 col-md-8'><h4 class='list-group-item-heading'>"+titre.value+" <small>"+sous_titre.value+"</small></h4><p class='list-group-item-text more'>"+description.value+"</p></div><div id='block_delete_button' class='col-md-1 pull-right'><span class=\"glyphicon glyphicon-remove delete_button\" aria-hidden='true' value='"+data_id+"' data-img='"+false_or_img+"'></span></div></div></a>");

                //AJOUT MESSAGE INFO

                $("#msg_info").append("<div class='alert alert-success' role='alert'>Le produit a bien été enregistré !</div>");
                setTimeout(function(){ $(".alert").remove(); },3000);


                //ON REPLACE LE LISTENER
                $('.delete_button').click(function(e){
                  e.preventDefault();
                  delete_html_ajax($(this));
                });
              },
            });
          }
        }
      });
    });

    // DELETE BUTTON LISTENER
    $('.delete_button').click(function(e){
      e.preventDefault();
      delete_html_ajax($(this));
    });

    function delete_html_ajax(data)
    {
      var id_button = data.attr("value");
      var img = data.attr("data-img");

      $.ajax(
      {
        url : '../modele/delete_ajax.php',
        type : 'GET',
        data : 'id=' + id_button + '&img=' + img,
        dataType : 'text',
        success : function(data, statut)
        {
          $("a[data-id='"+id_button+"']").remove();
          $("div[data-id='"+id_button+"']").remove();
        }
      });
    }

  });
});
