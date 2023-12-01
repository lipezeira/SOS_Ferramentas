<?php

declare(strict_types=1);

use SosFerramentas\Core\Router;

require __DIR__ . "/vendor/autoload.php";

const PASTA_VIEW = "./app/Views/";
const NS_CONTROLLERS = "\\SosFerramentas\\Controllers\\";

$url = $_GET['url'] ?? "";


Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/teste','LoginController','teste');
Router::add('/cadastro','LoginController','criarconta');


Router::exec($url);

