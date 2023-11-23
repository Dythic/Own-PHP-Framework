<?php

class Renderer
{
    /**
     * Display render page
     * 
     * @return void
     */

    public static function render(string $path, array $var = []): void 
    {

        extract($var);

        ob_start();
        require('templates/' . $path .'.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout.html.php');
    }
}