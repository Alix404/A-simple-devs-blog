<?php

namespace src\App\Twig;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigEnvironment
{

    protected $templatesPath = '../../views';
    protected $loader;
    protected $environment;
    protected $twigEnvironment;

    public function getTemplatesPath()
    {
        return $this->templatesPath;
    }

    public function getTwigEnvironment()
    {
        $this->twigEnvironment = $this->createEnvironment();
        return $this->twigEnvironment;
    }

    private function createEnvironment()
    {
        $this->loader = new FilesystemLoader($this->templatesPath);
        return $this->environment = new Environment($this->loader, ['debug' => true]);
    }

}