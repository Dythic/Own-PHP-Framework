<?php

class Http 
{
    /**
     * Redirect to new page withe url
     * 
     * @return void
     */

    public static function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}