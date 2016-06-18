<?php

class ProductController extends BaseController
{
    function index()
    {
        $model  =  new  ProductModel();
        $Product  =  $model->GetAllProduct();
        $Count = $model->GetCount();
        
        include VIEW_PATH . '/backend/ProductList.html';
    }

    function update()
    {
    }
}