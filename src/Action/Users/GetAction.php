<?php

namespace App\Action\Users;
 
use Slim\Http\Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Domain\Users\Service\GetService;

final class GetAction
{
  private GetService $service;

  public function __construct(GetService $service) {
    $this->service = $service;
  }

  public function __invoke(Request $request, Response $response): Response
  {
    // 請求 Service
    $return = $this->service->getUsers();
    return $response->withJson($return, 200, JSON_UNESCAPED_UNICODE);
  }
}