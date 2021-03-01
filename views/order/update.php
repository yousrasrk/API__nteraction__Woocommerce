<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$order=$existOrder->getoneOrder();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];

$existOrder = new OrdersController();
$existOrder->updateOrder($id);

}
?>
<?php require __DIR__ .'/../../views/includes/header.php';
?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=order/list" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>
   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="customer"
          value="<?php echo $order->id;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->first_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->last_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->phone;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->email;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="address">address</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer"
          value="<?php echo $order->shipping->address_1;?>"
         >
      </div>
      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-primary">update</button>
      </div>
      </div>
   
      </div>
      

 
    
   </form>

</div>