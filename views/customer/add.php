
<?php


require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

if(isset($_POST['submit']))
{
$newCustomer= new CustomersController();
$newCustomer->addCustomer();


}
?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=customer/list" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>
   <form method="post">

   <div class="form-group"> 
          <label for="id">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="customer">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer">
      </div>

      <div class="form-group"> 
          <label for="customer">adress</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="username">username</label>
          <input type="text" name="username" class="form-control" placeholder="customer">
      </div>

  
      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-primary">add</button>
      </div>
   </form>

</div>

