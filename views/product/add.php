<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{


$newProduct = new ProductsController();
$newProduct->addProduct();


}
?>
<?php require __DIR__ .'/../../views/includes/header.php';?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=product/list" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>
   <form method="post">

   <div class="form-group"> 
          <label for="id">name</label>
          <input type="text" name="name" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="customer">type</label>
          <input type="text" name="type" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">regular_price</label>
          <input type="text" name="regular_price" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">description</label>
          <input type="text" name="description" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="customer">short_description</label>
          <input type="text" name="short_description" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">categories</label>
          <input type="text" name="categories" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">images</label>
          <input name="file" type="file"  class="hidden" >
      </div>


      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-primary">add</button>
      </div>
   </form>

</div>