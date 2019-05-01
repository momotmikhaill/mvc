<?php


namespace app\controllers;


use app\core\Controller;

class ProductController extends Controller
{
    public function productsAction() : void
    {
        echo "Products";
    }

    public function productAction() : void
    {
        echo $this->service->getProduct($this->params['id']);

    }

}