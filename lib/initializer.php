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


    // TODO not finished
    function render_partial($string) {
      include($_ENV['root_dir'] . 'app/views/');
    }


    // This function will return the current user
    function current_user() {
      if (user_signed_in()) {
        return  User::find($_SESSION['username'], 'username');
      } else {
        return null;
      }
    }




    // This function will logout a user
    function destroy_session() {
      if(session_destroy()) {
        return true;
      } else {
        return false;
      }
    }



    // This function will return wheather a user is signed in
    function user_signed_in() {
      model('user');

      // Check if the session is set
      if (!isset($_SESSION['username'])) {
        return false;
      }

      // Get the user from the database
      $user = User::find($_SESSION['username'], 'username');

      // If there is no record of the user on the database
      if (!$user) {
        session_destroy();
        return false;
      }

      return true;
    }



    // This function will return the absolute path
    function path($string) {
      return  $_ENV['root_dir'] . $string;
    }



    // This function will redirect the user somewhere
    function redirect_to($string = null) {
      if ($string == null || $string == '' || $string == '/' || $string == 'root') {
        header('Location: ' . path(''));
      } else {
        header('Location: ' . path($string));
      }
    }




    // This function add assets to the application
    function add_assets() {
      // application.css
      if (file_exists('public/assets/stylesheets/application.css')) {
        echo "<link rel='stylesheet' href='" . path("public/assets/stylesheets/application.css") . "'>";
      }

      // application.js
      if (file_exists('public/assets/javascripts/application.js')) {
        echo "<script type='text/javascript' src='" .  path("public/assets/javascripts/application.js") . "'></script>";
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
