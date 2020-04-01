<?php

namespace src\App\Renderer;

use src\App\Router\Router;
use src\App\Twig\TwigEnvironment;

class Renderer
{

    protected $route;
    protected $twigEnvironment;

    public function __construct()
    {
        $this->route = new Router();
        $this->twigEnvironment = new TwigEnvironment();
    }

    public function render()
    {
        $this->twigEnvironment->getTwigEnvironment()->render($this->route->getRoute());
    }
}

