<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

if(isset($_POST['id']))
{
$existProduct = new ProductsController();
$existProduct->deleteProduct();
}

?>