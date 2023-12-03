<?php

declare(strict_types=1);

use SosFerramentas\Core\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/app/config.php";
require __DIR__ . "/app/rotas.php";

function css(string $arquivo): string{
    return URL_BASE."public/estilo/{$arquivo}.css";
}

function img(string $arquivoimg): string{
    return URL_BASE."public/img/{$arquivoimg}.png";
}

function componente(string $componente){
    require PASTA_VIEW."componentes/{$componente}.view.php";
} 



$url = $_GET['url'] ?? "";

Router::exec($url);

