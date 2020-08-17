<?php
namespace Controller;

use eftec\bladeone\BladeOne;

use Ozone\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController
{
    public function index(Request $request)
    {
        $baseURI = str_ireplace('index.php', '',$_SERVER['SCRIPT_NAME']);
        return new Response(View::make()->run("welcome", ["baseURI" => $baseURI]));
    }

    public function page(Request $request, $page)
    {
        //dd(__DIR__, );
        $pathInfo = $_SERVER['PATH_INFO'];
        $baseURI = str_ireplace('index.php', '',$_SERVER['SCRIPT_NAME']);
        return new Response(View::make()->run("$page", [
            'baseURI' => $baseURI,
            'pathInfo' => $pathInfo,
        ]));
    }
}