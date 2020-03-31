<?php

namespace src\Renderer;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class Renderer
{

    const _TEMPLATES_PATH = '../Template/';

    protected $twig;
    protected $loader;

    public function render($templateName = null)
    {
        if ($templateName == null) {
            $templatePath = self::_TEMPLATES_PATH;
            $this->loader = new FilesystemLoader($templatePath);
            $this->twig = new Environment($this->loader, ['debug' => true]);
            try {
                echo $this->twig->render('home.twig');
            } catch (LoaderError $e) {
            } catch (RuntimeError $e) {
            } catch (SyntaxError $e) {
            }
        } else {
            $templatePath = self::_TEMPLATES_PATH;
            $this->loader = new FilesystemLoader($templatePath);
            $this->twig = new Environment($this->loader, ['debug' => true]);
            try {
                echo $this->twig->render($templateName . '.twig');
            } catch (LoaderError $e) {
            } catch (RuntimeError $e) {
            } catch (SyntaxError $e) {
            }
        }

    }
}
