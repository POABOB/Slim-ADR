<?php

declare(strict_types=1);

use Slim\Http\Response;
// 發現使用Slim\Http\Request常常會報錯，所以使用官方的Request當作請求
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\App;

return function(App $app) {
  $app->options("[{routes.*}]", function(Request $req, Response $res, array $args) :Response { return $res; });

  $app->group("/api", function (RouteCollectorProxy $app) {

    $app->get("/home[/]", function(Request $req, Response $res, array $args) :Response { 
      return $res->withJson("GET HOME", 200, JSON_UNESCAPED_UNICODE);
    });

    $app->get("/home/{name}[/]", function(Request $req, Response $res, array $args) :Response { 
      return $res->withJson("GET Hello {$args['name']}!", 200, JSON_UNESCAPED_UNICODE);
    });

    $app->post("/login[/]", \App\Action\Auth\LoginAction::class);
    $app->get("/logout[/]", \App\Action\Auth\LogoutAction::class)->add(\App\Middleware\JwtAuth::class);
    
    // 相對原本基礎篇的寫法，更加精簡且可以清楚知道他是負責處理 Users 的 API 
    $app->group("/user", function (RouteCollectorProxy $app) {
      $app->get("[/]", \App\Action\Users\GetAction::class);
      $app->post("[/]", \App\Action\Users\InsertAction::class);
      $app->patch("[/]", \App\Action\Users\UpdateAction::class);
      $app->delete("[/]", \App\Action\Users\DeleteAction::class);
    });
 });
};