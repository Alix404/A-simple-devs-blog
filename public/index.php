<?php
require_once '../vendor/autoload.php';
use src\Renderer\Renderer;


$renderer = new Renderer;

if (isset($_GET['target'])) {
    $URLParameter = $_GET['target'];
    $renderer->render($URLParameter);
} else {
    $renderer->render(null);
}




