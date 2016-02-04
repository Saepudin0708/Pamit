<?php

namespace Pamit\Controllers;

use Pamit\Core\Controller;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        $this->logger->info('Open HomePage');
        /*$user = $this->db->query("SELECT * FROM users")
                        ->fetchAll(\PDO::FETCH_OBJ);*/
       return $this->view->render($response, 'home.twig');
    }
}