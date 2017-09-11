'use strict';

$(".cart").click(function(){
     
    $.ajax({
       url : 'traitement_cart.php',
       type : 'POST', // Le type de la requête HTTP, ici devenu POST
       data : 'email=' + email + '&contenu=' + contenu_mail, // On fait passer nos variables, exactement comme en GET, au script more_com.php
       dataType : 'html'
    });
   
});
