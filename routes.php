<?php
  function call($control, $action) {
    // require the file that matches the controller name
    require_once('app/controllers/application_controller.php');
    require_once('app/models/application.php');
    require_once('app/controllers/' . $control . '_controller.php');
    require_once('app/models/'. get_model_name($control) . '.php');

    // Create a new instance of the needed controller
    switch($control) {
      case 'homes':
        $controller = new HomesController();
        break;
      case 'books':
        $controller = new BooksController();
        break;
    }

    // Call the action of the controller
    $controller->{ $action }();

    // Call the view of that controller
    require_once('app/views/' . $control . '/' . $action . '.php');
  }

  // Just a list of the controllers we have and their actions
  // We consider those "allowed" values
  $controllers = array('homes' => ['index', 'error'],
                       'books' => ['show', 'index']);

  // Check that the requested controller and action are both allowed
  // If someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('homes', 'error');
    }
  } else {
    call('homes', 'error');
  }
?>
