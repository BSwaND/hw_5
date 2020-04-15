<?php


final class Autoload
{
    /** @var array */
    private $prefix;

    public function register()
    {
        spl_autoload_register(function ($class) {
            if ($this->prefix) {
                $keyPrefix = key($this->prefix);
                $class = str_replace($keyPrefix, $this->prefix[$keyPrefix], $class);

                require_once  str_replace('\\', '/', $class) . '.php';
            }
        });
    }

    public function getPrefix($prefix): array
    {
        return $this->prefix = $prefix;
    }
}