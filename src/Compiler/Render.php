<?php

namespace Compiler;


class Render
{
    private $path = null;

    public function __construct()
    {
        $this->path = DS . Helpers::realpath(Config::$path) . DS;
    }

    public function view(array $files, array $data = [])
    {
        foreach ($files as $file)
        {
            var_dump(dir($this->path));
            return $this->path . $file . '.bt'. PHP_EOL . __DIR__;
        }
    }
}