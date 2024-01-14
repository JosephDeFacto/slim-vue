<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

require dirname(__DIR__) . '/vendor/autoload.php';

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Rsp;
use Slim\Psr7\Response;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

/*$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write('Hello World!');
    return $response;
});*/

$app->get('/api/data', function (Request $request, Response $response, array $args) {
    $name = 'Josip';

    $response->getBody()->write('Hello ' . $name);
    return $response;



});

$app->run();