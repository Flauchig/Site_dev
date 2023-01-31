<?php

$autoload = function ($class) {
    if($class== 'E+mail'){
        include('classes/phpmailer/PHPMailerAutoload.php');
    }
    include('classes/'.$class.'.php');
    
    // essa é uma função que inclui arquivos baseado  na classe que foi passada por argumento 
};

spl_autoload_register($autoload);

// serve  para carregar automaticamente as classes 

define('INCLUDE_PATH','http://localhost/teste1/');

// serve Para definir um caminho especifico 


?>