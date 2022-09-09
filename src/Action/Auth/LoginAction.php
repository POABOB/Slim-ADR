<?php

declare(strict_types=1);

namespace App\Action\Auth;

use Slim\Http\Response;
// 發現使用Slim\Http\Request常常會報錯，所以使用官方的Request當作請求
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Domain\Auth\Service\LoginService;

final class LoginAction
{
    /**
     * 
     *
     * @var LoginService The login service 
     */
    private LoginService $service;
 
    public function __construct(LoginService $service)
    {
        $this->service = $service;
    }
 
    public function __invoke(Request $req, Response $res): Response
    {
        $data = (array)$req->getParsedBody();
        $return = $this->service->login($data);
        return $res->withJson($return, 200, JSON_UNESCAPED_UNICODE);
    }
}