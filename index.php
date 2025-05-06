<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

// Endpoint: /uma-api
$app->get('/uma-api', function (Request $request, Response $response, $args) {
    $mensagem = "Uma API (Application Programming Interface) permite que diferentes sistemas se comuniquem usando regras e formatos padronizados. Uma API REST usa o protocolo HTTP para essa comunicação.";
    $response->getBody()->write($mensagem);
    return $response;
});

// Endpoint: /codigos
$app->get('/codigos', function (Request $request, Response $response, $args) {
    $mensagem = "Códigos de status HTTP indicam o resultado de uma requisição. Exemplos: 200 (OK), 404 (Não encontrado), 500 (Erro interno).";
    $response->getBody()->write($mensagem);
    return $response;
});

// Endpoint: /erro
$app->get('/erro', function (Request $request, Response $response, $args) {
    $mensagem = "Não encontrado";
    $response->getBody()->write($mensagem);
    return $response->withStatus(404);
});

$app->run();