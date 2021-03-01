
<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';


$data = new CustomersController();
$customers= $data->getAllCustomers();

?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=customer/add" add>
   <i class="fas fa-plus"></i>
   </a>
   <table class="table table-hover">
  <thead>
    <tr>
    <th>id</th>
    <th>Email</th>
    <th>Name</th>
      <th>Billing Address</th>
  <!-- <th>Total Orders</th>-->
    <!--  <th>Total spent</th>-->
      <th>Avatar</th>
    </tr>
    </tr>
  </thead>
  <tbody>
                                              <?php
                  foreach($customers as $customer){
                  echo "<tr><td>" . $customer["id"]."</td>
                            <td>" . $customer["email"]."</td>
                            <td>" . $customer["first_name"].$customer["last_name"]."</td>
                            <td>" .  $customer["billing"]["address_1"]."</td>
                            <td><img height='50px' width='50px' src='".$customer["avatar_url"]."'></td>
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=customer/update'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=customer/delete'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>

</div>