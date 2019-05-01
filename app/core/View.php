<?php

namespace app\core;

class View
{
    public $layout;
    public $component;


    public function __construct($layout = 'main', $component = 'default')
    {
        $this->layout = $layout;
        $this->component = $component;
    }

    public function render($data = [])
    {
        $componentPath = __DIR__ . "/../../public/template/components/". $this->component . '.php';
        $layoutPath = __DIR__ . "/../../public/template/layout/". $this->layout . '/'. $this->layout . '.php';

        $data['style'] = __DIR__ . "/../../public/assets/style/style.css";

        if (file_exists($componentPath)){

            ob_start();
            require $componentPath;
            $content = ob_get_contents();
            ob_end_clean();

            if (file_exists($layoutPath)){
                require $layoutPath;
            }
        }
    }

}