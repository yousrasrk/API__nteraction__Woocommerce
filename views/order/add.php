<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';


//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newOrder = new OrdersController();
$newOrder->addOrder();


}
?>
<?php require __DIR__ .'/../../views/includes/header.php';?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=order/list" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>
   <form method="post">

   
      <div class="form-group"> 
          <label for="id">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer">
      </div>
     

      <div class="form-group"> 
          <label for="id">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="email">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="address_1">address_1</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer">
      </div>
  
      <div class="form-group"> 
          <label for="id">product_id</label>
          <input type="text" name="product_id" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="id">quantity</label>
          <input type="text" name="quantity" class="form-control" placeholder="customer">
      </div>
     
 
      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-primary">add</button>
      </div>
      
   </form>

</div>