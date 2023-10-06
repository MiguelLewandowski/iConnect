<?php

ob_start();

session_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router(CONF_URL_BASE, ":");

/**
 * Web Routes
 */

$route->namespace("Source\App");

$route->get("/","Web:home");
$route->get("/solucoes","Web:solution");
$route->get("/projetos","Web:projects");
$route->get("/videos","Web:videos");
$route->get("/audioevideo","Web:audioevideo");
$route->get("/fibaro","Web:fibaro");
$route->get("/monitoramento","Web:monitoramento");
$route->get("/touchlight","Web:touchlight");

/**
 * FAQ
 */
$route->get("/faq","Web:faq");

/**
 * REGISTER USER
 */

$route->get("/cadastrar","Web:register"); // redenriza o Registro
$route->post("/cadastrar","Web:register"); // recebe os dados do formulário
$route->get("/login","Web:login");
$route->post("/login","Web:login");

/**
 * PROJECTS
 */

$route->get("/projetos/{category}/{idCategory}","Web:projectsByCategory");
$route->get("/projeto/{idProject}/{titleProject}","Web:projectById");

/**
 * App Routs
 */

$route->group("/app"); // agrupa em /app
$route->get("/","App:home");
$route->get("/logout","App:logout");

/**
 * Perfil
 */
$route->get("/perfil","App:profile");
$route->post("/perfil","App:profileUpdate");

/**
 * Projects
 */
$route->get("/projeto-registro","App:projectRegister"); // mostra o form
$route->post("/projeto-registro","App:projectRegister"); // recebe os dados do form


$route->get("/listar","App:list");
$route->get("/pdf","App:createPDF");
$route->group(null); // desagrupo do /app

/**
 * ADMIN
 */

$route->group("/admin"); // agrupa em /admin
$route->get("/","Adm:home");
$route->get("/faq-registro","Adm:faqRegister");
$route->post("/faq-registro","Adm:faqRegister");
$route->group(null); // desagrupo do /admin

/*
 * Erros Routes
 */

$route->group("error")->namespace("Source\App");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

/*
 * Error Redirect
 */

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}

ob_end_flush();