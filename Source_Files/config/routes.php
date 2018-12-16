<?php
return array(
    'Zinchenko-shop/Source_Files/product/([0-9]+)'=>'product/view/$1',

    'Zinchenko-shop/Source_Files/catalog'=>'catalog/view/',

    'Zinchenko-shop/Source_Files/category/([0-9]+)/page-([0-9]+)'=>'catalog/category/$1/$2',
    'Zinchenko-shop/Source_Files/category/([0-9]+)'=>'catalog/category/$1',

    'Zinchenko-shop/Source_Files/user/register'=>'user/register',
    'Zinchenko-shop/Source_Files/user/edit'=> 'cabinet/edit',

    'Zinchenko-shop/Source_Files/cabinet'=> 'cabinet/index',

    'Zinchenko-shop/Source_Files/user/login'=>'user/login',
    'Zinchenko-shop/Source_Files/user/logout'=>'user/logout',

    'Zinchenko-shop/Source_Files/contacts'=>'site/contact',

    'Zinchenko-shop/Source_Files/cart/add/([0-9]+)'=>'cart/add/$1',
    'Zinchenko-shop/Source_Files/cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
    'Zinchenko-shop/Source_Files/cart/delete/([0-9]+)'=>'cart/delete/$1',
    'Zinchenko-shop/Source_Files/cart'=>'cart/index',

    'Zinchenko-shop/Source_Files/checkout'=>'cart/checkout',
    'Zinchenko-shop/Source_Files/admin'=>'admin/index',


    'Zinchenko-shop/Source_Files'=>'site/index'
);