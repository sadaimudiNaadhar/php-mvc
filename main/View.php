<?php

namespace Main;

class View
{

   /**
    * View File
    *
    * @param string $view
    * @param array $args
    * @return mixed
    */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }
}
