<?php

include 'Controller/PessoaController.php';

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

}

    // Produto.CONTROLLER

    include 'Controller/ProdutoController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url)
{

    case '/':
        echo "página inicial";
    break;
    
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

}
    //Funcionario.CONTROLLER

    include 'Controller/FuncionarioController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url)
{
    
    case '/':
        echo "página inicial";
    break;

    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/form/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

}