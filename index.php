<?php
include 'inc/header.php';
Session::CheckLogin();
$sId =  Session::get('roleid');

?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}



 ?>

<div class="card ">
  <div class="card-header">
          <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
        </div>
        <div class="card-body">


            <div style="width:100%; margin:0px auto">

            <form class="col-md-8 offset-md-2" action="" method="post">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>


            </form>
          </div>


        </div>
      </div>

<footer class="text-muted">
        <div class="container">
            <p class="float-right">
            </p>
            <p>Copyright &copy; 2021. All rights not reserved</p>
        </div>
    </footer>

  <?php
  include 'inc/footer.php';

  ?>
