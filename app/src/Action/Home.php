<?php
/**
 * Created by PhpStorm.
 * User: laugusto
 * Date: 9/16/17
 * Time: 8:52 PM
 */

namespace Loja\Action;

use PSR\Http\Message\ServerRequestInterface as Request;
use PSR\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig as View;

final class Home
{
    private $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->view->render($response, 'home.twig');
        return $response;
    }
}
