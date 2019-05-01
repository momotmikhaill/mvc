<?php

return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'products' => [
        'controller' => 'product',
        'action' => 'products',
    ],

    'product/{id:\d+}' => [
        'controller' => 'product',
        'action' => 'product',
    ],



];