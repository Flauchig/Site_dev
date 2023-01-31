<?php

include('config.php');


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" type="text/css">
    <link href=" <?php echo INCLUDE_PATH; ?>estilo/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="descrição do meu website">



    <title>Projeto 01 </title>

</head>

<body>


    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    // O operador ternário "?" é usado para fazer essa atribuição condicional
    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            // aqui estou criando uma tag usando php para manipular no js depois. 
            break;

        case 'servicos':
            echo '<target target="servicos" />';
            break;

        // target é uma tag de rastreamento
    
    }

    // aqui eu criei um switch para criar duas tags e classes em html para manipular no js depois. 
    
    ?>





    <header>
        <div class="center">
            <div class=" logo left"> <a href="index.php"><img src=" <?php echo INCLUDE_PATH; ?>imagens/logomarca1.png"
                        class="logo_header"> </a>

            </div>

            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>

            </nav>

            <nav class=" mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>


            </nav>

            <div class="clear"></div>
            <!--clear-->

        </div>
        <!--center -->
    </header>


    <?php



    // A expressão que será avaliada (isset($_GET['url']) )
    // O valor que será atribuído se a expressão for avaliada como verdadeira ( $_GET['url'] )
    // O valor que será atribuído se a expressão for avaliada como falsa ('home')
    // A expressão é avaliada primeiramente, se for verdadeira então é retornado o
    
    // $_GET['url'] foi fornecida então é atribuido o valor dela para $url, caso contrário é atribuido o valor default 'home'.
    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
        //se existir a pagina inclua a mesma ou seja buscando os itens da url.  
    


    } else {
        // caso contrario podemos scolocar uma pagina ou arquivo  de erro 
    
        if ($url != 'sobre' && $url != 'servicos') {

            $pagina404 = true;

            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }



    ?>


    <footer <?php if (isset($pagina404) && $pagina404 == true)
        echo 'class = "fixed"' ?>>
            <!-- nessa função se a pagina 404 existir  ela vai criar uma classe para estilizar o foooter da pagina 404  -->
            <div class="center">


                <p> Todos os Direitos Reservados a © <img src="imagens/logomarca1.png" class="logo_footer"> </p>
            </div>
            <!--center-->


        </footer>



        <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

    <?php
    if ($url == 'home' || $url == '') {

        ?>

        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

        <!-- aqui é feita a validação para as imagem de slide usando duas tags php   -->

    <?php } ?>

    <?php
    if ($url == 'contato') {

        ?>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAZC3zByOBQ11IZwMzHbYFTkbCcDVc51Jo'></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>

        <!-- aqui usando duas tags php para fazer a validação do mapa na pagina contato -->

    <?php
    }

    // aqui estou fechando as chaves com outra tag php 
    ?>




</body>

</html>