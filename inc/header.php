<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">



    <title>PHP CRUD User Management</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">

  </head>
  <body>


<?php


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  // Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  // <strong>Success !</strong> You are Logged Out Successfully !</div>');
  Session::destroy();
}



 ?>


    <div class="container">

      <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">



          <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') !== '3') { ?>
                  <li class="nav-item
            <?php

                  $path = $_SERVER['SCRIPT_FILENAME'];
                  $current = basename($path, '.php');
                  if ($current == 'addBook') {
                      echo "active ";
                  }

                  ?>

            ">

                      <a class="nav-link" href="addBook.php"><i class="fa fa-book mr-2"></i>Add book <span class="sr-only">(current)</span></a>
                  </li>
                <?php if (Session::get('roleid') == '1') { ?>
              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'addUser') {
                            echo " active ";
                          }

                         ?>">

                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add User </span></a>
              </li>
                    <?php } ?>
                  <li class="nav-item
            <?php

                  $path = $_SERVER['SCRIPT_FILENAME'];
                  $current = basename($path, '.php');
                  if ($current == '#') {
                      echo "active ";
                  }

                  ?>

            ">
                  <li class="nav-item
            <?php

                  $path = $_SERVER['SCRIPT_FILENAME'];
                  $current = basename($path, '.php');
                  if ($current == 'manageBook') {
                      echo "active ";
                  }

                  ?>

            ">

                      <a class="nav-link" href="manageBook.php"><i class="fas fa-archive mr-2"></i>Book list<span class="sr-only">(current)</span></a>
                  </li>
                <?php if (Session::get('roleid') == '1') { ?>
                  <li class="nav-item">

                      <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User list </span></a>
                  </li>

            <?php  }} ?>
              <li class="nav-item
            <?php

              $path = $_SERVER['SCRIPT_FILENAME'];
              $current = basename($path, '.php');
              if ($current == 'library') {
                  echo "active ";
              }

              ?>

            ">

                  <a class="nav-link" href="library.php?id=<?php echo Session::get("id"); ?>"><i class="fa fa-leanpub"></i>Library <span class="sr-only">(current)</span></a>
              </li>


              <li class="nav-item
            <?php

              $path = $_SERVER['SCRIPT_FILENAME'];
              $current = basename($path, '.php');
              if ($current == 'profile') {
                  echo "active ";
              }

              ?>

            ">

                  <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fa fa-child mr-2"></i>Profile <span class="sr-only">(current)</span></a>
              </li>


            <li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>
          <?php }else{ ?>

              <li class="nav-item

              <?php

                          $path = $_SERVER['SCRIPT_FILENAME'];
                          $current = basename($path, '.php');
                          if ($current == 'register') {
                            echo " active ";
                          }

                         ?>">
                <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
              </li>
              <li class="nav-item
                <?php

                    				$path = $_SERVER['SCRIPT_FILENAME'];
                    				$current = basename($path, '.php');
                    				if ($current == 'login') {
                    					echo " active ";
                    				}

                    			 ?>">
                <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
              </li>

          <?php } ?>


          </ul>

        </div>
      </nav>
