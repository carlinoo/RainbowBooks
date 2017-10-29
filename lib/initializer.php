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


    // This function add assets to the application
    function add_assets() {
      // application.css
      if (file_exists('public/assets/stylesheets/application.css')) {
        echo "<link rel='stylesheet' href='public/assets/stylesheets/application.css'>";
      }

      // application.js
      if (file_exists('public/assets/javascripts/application.js')) {
        echo "<script type='text/javascript' src='public/assets/javascripts/application.js'></script>";
      }

      // // #{controller_name}.css
      // if (file_exists('public/assets/stylesheets/' . filter_var($_GET['controller'], FILTER_SANITIZE_STRING) . '.css')) {
      //   echo "<link rel='stylesheet' href='public/assets/stylesheets/" . filter_var($_GET['controller'], FILTER_SANITIZE_STRING) . ".css'>";
      // }
      //
      // // #{controller_name}.js
      // if (file_exists('public/assets/javascripts/' . filter_var($_GET['controller'], FILTER_SANITIZE_STRING) . '.js')) {
      //   echo "<link rel='stylesheet' href='public/assets/javascripts/" . filter_var($_GET['controller'], FILTER_SANITIZE_STRING) . ".js'>";
      // }

    }


 ?>
