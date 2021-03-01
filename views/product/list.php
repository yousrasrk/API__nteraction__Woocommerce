<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';

//require_once('../database/db.php');

$data = new ProductsController();
$products= $data->getAllProducts();

?>
<?php 
 if (isset($_POST['export'])) {

  $data= new ProductsController();
  $data->export1();
}
?>
<?php include 'views/includes/header.php';
?>
<div class="container">
<form method="post" >
<input type="hidden" name="export" value="exportCSV">
 <input type="submit" class="btn btn-success" value="CSV export"/>
</form>
</div>
<div class="container">
   <a href="http://localhost/woocommercePhPApp/?page=product/add" add>
   <i class="fas fa-plus"></i>
   </a>
   <table class="table table-hover">
  <thead>
    <tr>
              <th>id #</th>
              <th>name</th>
              <th>status</th>
              <th>price</th>
              <th>total_sales</th>
               <th>image</th>
               <th>Actions</th>
    </tr>
    </tr>
  </thead>
  <tbody>
                                              <?php
                  foreach($products as $product){
                  echo "<tr><td>" . $product["id"]."</td>
                            <td>" . $product["name"]."</td>
                            <td>" . $product["status"]."</td>
                            <td>" . $product["price"]."</td>
                            <td>" . $product["total_sales"]."</td>
                            <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=product/update'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=product/delete'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>

</div>