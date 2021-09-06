<?php
    require('model/ProductsManager.php');

    function displayProducts()
    {
        $productsManager = new ProductsManager();
        $answer = $productsManager->getProducts();
        require('view/productView.php');
    }

    function addProduct($name, $price, $store, $kind, $actualStock, $minStock)
    {
        $productsManager = new ProductsManager();
        $answer = $productsManager->postProduct($name, $price, $store, $kind, $actualStock, $minStock);
        
        if($answer === false)
        {
            die('impossible dajouter lke revenu');
        }
        else
        {
            header('Location: index.php?page=products');
        }
    }