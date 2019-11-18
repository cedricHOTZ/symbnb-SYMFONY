
//ajout des images dans le formulaire de création d'annonce (new)
    $('#add-image').click(function(){
        //Je récupère le numéro des futurs champs que je vais créer
     const index = +$('#widgets-counter').val();  

     // Je récupère le prototype des entrées
     const tmpl = $('#ajouter_annonce_images').data('prototype').replace(/__name__/g, index);  

     // j'injecte ce code au sein de la div
     $('#ajouter_annonce_images').append(tmpl);
     
     $('widgets-counter').val(index + 1);
     // Je gère le bouton supprimer
     handleDeleteButtons();
    });

    //gérer les buttons de suppression
    function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
    }

    function updateCounter(){
        const count = $('#ad_images div.form-group').length;
        $('#widgets-counter').val(count);
    }
    updateCounter();
    handleDeleteButtons();
