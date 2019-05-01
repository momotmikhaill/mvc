<?php


namespace app\controllers;


use app\core\Controller;

class ProductController extends Controller
{
    public function productsAction()
    {
        $data = $this->service->getProducts();
        var_dump($data);
    }
    public function productAction()
    {
        $data = $this->service->getProduct($this->params['id']);
        if (isset($data)){
            echo $data;
        }
    }

}