<?php


namespace app\services;


use app\core\Service;

class ProductService extends Service
{

    public function getProduct($id) : ?string
    {
        $products = array("Product 1", "Product 2", "Product 3");
        if (isset($products[$id])){
            return $products[$id];
        }
        return null;
    }

    public function getProducts() : array
    {
        $products = array("Product 1", "Product 2", "Product 3");
        return $products;
    }
}