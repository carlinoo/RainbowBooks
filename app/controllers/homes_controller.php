<?php

  class HomesController extends ApplicationController {

    // This Action will be displayed if the user tries to access an action or controller that doesnt exist
    public function error() {
      require_once("app/views/homes/error.php");
    }


    // This action is the main page of the application
    public function index() {
      $home = Home::all();
      require_once("app/views/homes/index.php");
    }
  }


 ?>
