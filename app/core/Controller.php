<?php

namespace app\core;

abstract class Controller
{
    public $view;
    public $service;
    public $params;


    public function __construct($params) {

        $this->params = $params;
        $this->service = $this->modelLoader();

    }

    public function modelLoader()
    {
        if (isset($this->params)){

            $modelName = 'app\services\\' . ucfirst($this->params['controller']). 'Service';
            $model = new $modelName;

            return $model;
        }

    }

}