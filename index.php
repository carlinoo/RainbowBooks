<?php
  // We require the $_ENV variables and the connection to the database. We also require the initializers fucntions
  require "config/variables.php";
  require_once('config/connection.php');
  require_once('lib/initializer.php');


  // Now we use this for the controllers and the actions
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  } else {
    $controller = 'pages';
    $action = 'home';
  }

  // This is the layout of the HTML page
  require_once('app/views/layouts/layout.php');


 ?>
