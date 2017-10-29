<?php

  // This is the ApplicationController from which the rest of controllers will inherit from
  class ApplicationController {

    // This action will render a view passed as a parameter
    protected function render_view($view, $params = []) {
      require_once('app/views/' . $view . '.php');
    }

    protected function no_render() {
      header('Location: index.php');
    }
  }



 ?>
