<?php

namespace App\Action\Users;

use Slim\Http\Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Domain\Users\Service\DeleteService;

final class DeleteAction
{
  private DeleteService $service;

  public function __construct(DeleteService $service) {
    $this->service = $service;
  }

  public function __invoke(Request $request, Response $response): Response
  {
    // 獲取請求的Body
    $data = (array)$request->getParsedBody();
    $return = $this->service->deleteUser($data);
    return $response->withJson($return, 200, JSON_UNESCAPED_UNICODE);
  }
}