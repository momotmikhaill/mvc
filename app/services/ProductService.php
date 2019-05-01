<?php


namespace app\services;


use app\core\Service;

class ProductService extends Service
{

    public function getProduct(int $id) : ?string
    {
        $arr = ["Prod 0", "Prod 1", "Prod 2"];

        if (isset($arr[$id])){
            return $arr[$id];
        }

        return null;
    }
}