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



    // Thiss function will check if all the values on the $source exist on the $arr
    function all_params_have_values_from($arr, $source, $exceptions = []) {
      foreach ($source as $value) {

        // If the value is on the $exceptions array, then skip th eiteration
        if (in_array($value, $exceptions)) {
          continue;
        }

        // If the $value is not a key on the $arr and it has a value
        if (!array_key_exists($value, $arr) || trim($arr[$value]) == '') {
          return false;
        }
      }

      return true;
    }



    // This function will return the value passed as an argument checking there is no errors or warnings
    function clean($var) {
      if (gettype($var) == 'array' || gettype($var) == 'object' || gettype($var) == 'resource' || gettype($var) == 'NULL' || gettype($var) == 'unknown type') {
        return '';
      }
      return $var;
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
        unset($_SESSION['username']);
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



    // This will echo $string of the $condition is true
    function echo_if($string, $condition) {
      if ($condition) {
        echo $string;
      } else {
        echo "";
      }
    }



    // This function will return a $value if the condition is true
    function return_if($value, $condition) {
      if ($condition) {
        return $value;
      }
    }


    // This function return the image path of an image passed as an argument
    function image_path($string) {
      return $_ENV['root_dir'] . 'public/assets/images/' . $string;
    }


    // This function will redirect the user somewhere
    function redirect_to($string = null) {
      if ($string == null || $string == '' || $string == '/' || $string == 'root') {
        header('Location: ' . path(''));
        die();
        exit();
      } else {
        header('Location: ' . path($string));
        die();
        exit();
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
