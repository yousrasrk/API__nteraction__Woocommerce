
<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

if(isset($_POST['id']))
{
$existCustomer= new CustomersController();
$customer=$existCustomer->getoneCustomer();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];

$existCustomer = new CustomersController();
$existCustomer->updateCustomer($id);

}
?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=customer/list" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>
   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="customer"
          value="<?php echo $customer->id;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="email">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer"
          value="<?php echo $customer->email;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer"
          value="<?php echo $customer->first_name;?>"
         >
      </div>
   
      <div class="form-group" > 
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer"
          value="<?php echo $customer->last_name;?>"
         >

         <div class="form-group" > 
          <label for="address_1">username</label>
          <input type="text" name="username" class="form-control" placeholder="customer"
          value="<?php echo ($customer->username);?>"
         >
      </div>
  
      <div class="form-group" > 
          <label for="address_1">address_1</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer"
          value="<?php echo ($customer->billing->address_1);?>"
         >
      </div>

      

      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-primary">update</button>
      </div>
   </form>
   </div>
</div>