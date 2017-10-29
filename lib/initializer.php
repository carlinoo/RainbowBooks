<?php
    /*
    ** On this file I will put functions that will be initialized everytime
    */

    function model($model) {
      require_once('app/models/' . strtolower($model) . '.php');
      return new $model;
    }

    // This function will generate the entire app
    function render() {
      $app = new App();
    }


 ?>
