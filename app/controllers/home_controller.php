<?php

  class HomeController extends ApplicationController {

    // This Action will be displayed if the user tries to access an action or controller that doesnt exist
    public function error() {
      require_once("app/views/home/error.php");
    }


    // This action is the main page of the application
    public function index($var1 = 'Jon') {
      $this->model('home');
      require_once("app/views/home/index.php");
    }
  }


 ?>
