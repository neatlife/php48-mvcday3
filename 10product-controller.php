<?php
require_once './10product-model.php';
require_once 'BaseController.php';

class ProductController extends BaseController
{
    function index()
    {
        $model  =  new  ProductModel();
        $Product  =  $model->GetAllProduct();
        $Count = $model->GetCount();

        include './10product-view.html';
    }

    function update()
    {
    }
}

$obj = new ProductController();
$obj->index();