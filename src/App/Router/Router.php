<?php

namespace src\App\Router;

use src\App\Twig\TwigEnvironment;

class Router
{
    protected $target;
    protected $twigEnvironment;
    protected $route;

    public function __construct()
    {
        $this->twigEnvironment = new TwigEnvironment();
    }


    public function getRoute()
    {
        $this->recoverTarget();
        $this->finalRoute();
        return $this->route;
    }

    private function recoverTarget()
    {

        if (isset($_GET['target'])) {
            $this->target = $_GET['target'];
        } else {
            $this->target = null;
        }

        return $this->target;
    }

    private function finalRoute()
    {
        if (isset($_GET['target'])) {
            $this->route = $this->twigEnvironment->getTemplatesPath() . $this->target . '.twig';
        } else {
            $this->route = $this->twigEnvironment->getTemplatesPath() . 'home.twig';
        }

        return $this->route;
    }
}