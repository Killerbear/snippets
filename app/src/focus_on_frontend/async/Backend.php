<?php

namespace snippets\focus_on_frontend\async;

use Bramus\Router\Router;

class Backend
{
    public function __construct()
    {
        $route = new Router();
        $route->get('/',function (){
            echo "ok";
        });
        $route->run();
    }
}