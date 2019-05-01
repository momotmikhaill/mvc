<?php

namespace app\controllers;

use app\core\Controller;
use app\core\IController;
use app\core\View;

class MainController extends Controller
{

    public function indexAction() : void
    {

        $this->view = new View('main', 'main');

        $data = [];
        $data['title'] = "Main";


        $this->view->render($data);
    }



}