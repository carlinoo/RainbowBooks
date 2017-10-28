<?php

  // This is the ApplicationController from which the rest of controllers will inherit from
  class ApplicationController {

    // This action will be called from any controller. it will return a model object that is passed as paramater
    protected function model($model) {
      require_once('app/models/' . $model . '.php');
      return new $model;
    }


    // This action will render a view passed as a parameter
    protected function render_view($view, $params = []) {
      require_once('app/views/' . $view . '.php');
    }
  }



 ?>
