<?php

  class UserController extends ApplicationController {


    // This method will sign out a user
    public function destroy_session() {
      if (destroy_session()) {
        redirect_to('/');
      }
    }


    // This action will log in a user
    public function log_in() {
      echo "<br><br>";
      var_dump($_POST);
      echo "<br><br>";
    }
  }

 ?>
