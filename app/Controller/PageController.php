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

        return new Response(View::make()->run("welcome"));
    }

    public function page(Request $request, $page)
    {
        //dd(__DIR__, );
        $pathInfo = $_SERVER['PATH_INFO'];
        return new Response(View::make()->run("$page", ['pathInfo' => $pathInfo]));
    }
}