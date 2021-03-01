<?php include 'views/includes/header1.php';
?>

<?php
require __DIR__ . '/../../controllers/LoginController.php';


if(isset($_POST["submit"]))
{
    $login=new LoginController();
    $login->auth();
}
?>
<div class="container" > 
  <div class="row-my-4" style="margin-top=79px;">
<div class="card" style="margin-top=79px;">
<h5 class="card-title"><center>connection</center></h5>
  <div class="card-body"><form method="post">

<div class="form-group" >
    <label for="Consumer key">site</label>
    <input type="text" name="site" class="form-control" id="Consumer key" placeholder="Enter Consumer key">

  </div>
  <div class="form-group" >
    <label for="Consumer key">Consumer key</label>
    <input type="password" name="ck" class="form-control" id="Consumer key" placeholder="Enter Consumer key">

  </div>
  <div class="form-group">
    <label for="secret key">secret key</label>
    <input type="password" name="cs" class="form-control" id="secret key" aria-describedby="emailHelp" placeholder="Enter secret key">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Connect</button>


</form>




</div>
</div>
</div>
</div>

