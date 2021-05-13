<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}


require __DIR__ . '/../vendor/autoload.php';

//Configurando um carregador
$loader = new Twig_Loader_Array([
    'index' => 'Hello World!'
]);

//Configurar um ambiante do twig
$twig = new Twig_Environment($loader);

//Renderizar o template
echo $twig->render('index');

// require __DIR__ . '/../src/app.php';