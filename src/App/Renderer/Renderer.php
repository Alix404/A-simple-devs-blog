<?php

namespace src\App\Renderer;

use src\App\Router\Router;
use src\App\Twig\TwigEnvironment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

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
        try {
            echo $this->twigEnvironment->getTwigEnvironment()->render($this->route->getRoute());
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }
    }
}

