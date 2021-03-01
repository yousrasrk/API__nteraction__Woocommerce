<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');

$data = new OrdersController();
$orders= $data->getAllOrders();

?>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=order/add" add>
   <i class="fas fa-plus"></i>
   </a>
   <table class="table table-hover">
  <thead>
    <tr>
                                          <th>Order #</th>
                                               <th>Customer</th>
                                               <th>Address</th>
                                               <th>Contact</th>
                                               <th>Order Date</th>
                                               <th>Status</th>
                                               <th>Actions</th>
    </tr>
    </tr>
  </thead>
  <tbody>
                                              <?php
                  foreach($orders as $order){
                  echo "<tr><td>" . $order["id"]."</td>
                            <td>" .  $order["billing"]["first_name"].$order["billing"]["last_name"]."</td>
                           
                            <td>" . $order["shipping"]["address_1"]."</td>
                            <td>" . $order["billing"]["phone"]."</td>
                            <td>" . $order["date_created"]."</td>
                            <td>" . $order["status"]."</td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=order/update'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=order/delete'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>

</div>