<?php

namespace Src\App\Controllers;

use Exception;

abstract class Controller
{
    /**
     * @throws Exception
     */
    public function render($viewName, array $args = []): void
    {
        $pathToView = dirname(__DIR__) . "/Views/" . $viewName . '.php';

        if (!file_exists($pathToView)) {
            throw new Exception("View file not found: " . $pathToView);
        }

        extract($args);

        ob_start();

        include $pathToView;

        $content = ob_get_clean();

        exit($content);
    }
}
