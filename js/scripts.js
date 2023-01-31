$(function() {
    // aqui vai o codigo em js
    $('nav.mobile').click(function(){
        // aqui é aonde vai a execução do codigo 
        var listamenu = $('nav.mobile ul');
       /*
       //abrindo atravez do fadeIn  e fazendo a validação para o fadeOut

        if(listamenu.is(':hidden')== true){
            listamenu.fadeIn();

        }else{
            listamenu.fadeOut();
        }
        */
       // listamenu.slideToggle(); //slideToggle é o jeito mais simples de abrir e fechar uma barra com menu oculto 

       
       if(listamenu.is(':hidden')== true){
        //fa fa-xmark
        //fa fa-bars
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-bars');
        icone.addClass("fa-xmark");
        listamenu.slideToggle();
    
        
    }else{
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-xmark');
        icone.addClass("fa-bars");
        listamenu.slideToggle();
    
        // trocando icones com jquery com a manipulação das classes.
        
    }
    }); 

    
    
    
    if ($('target').length > 0) {
        // o verificando se existe
        var elemento = '#'+$('target').attr('target');
        //  aqui esta pegando o elemento pelo id mas podemos tambem pegar pela classe 

        var divScroll = $(elemento).offset().top;
        // aqui estou buscando no jquery as posições dos elementos com .offset().e .top()


        $('html,body').animate({scrollTop:divScroll},2000);
        // A propriedade "scrollTop" é útil para criar efeitos de rolagem suave, navegação por ancoras, entre outros.

       

        
    } 


    
})