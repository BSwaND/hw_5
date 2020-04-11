<?php


final class autoload
{
    /** @var string */
    private   $path;

    public function register()
    {
        spl_autoload_register(function ($class) {
            $this->path =  $this->prefix . str_replace('\\', '/', $class) . '.php';
            require_once   $this->path;
        });
    }
}