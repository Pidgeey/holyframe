<?php

namespace App\Controllers;

use App\Models\Product;
use App\Resources\ProductResourceCollection;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;
use Src\Connections\Mysql;

/**
 * Class HomeController
 *
 * @package App\Controllers
 */
class HomeController extends BaseController
{
    /**
     * Home page render
     *
     * @param \Slim\Psr7\Request $request
     * @param \Slim\Psr7\Response $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function home(Request $request, Response $response): \Psr\Http\Message\ResponseInterface
    {
        $renderer = new PhpRenderer('../resources/views');
        return $renderer->render($response, "home.php");
    }

    public function getProducts()
    {
        $products = Product::getQueryBuilder()->get();

        return (new ProductResourceCollection($products))->toJsonResponse();
    }
}
