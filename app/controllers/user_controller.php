<?php

  class UserController extends ApplicationController {


    // This method will sign out a user
    public function destroy_session() {
      if (destroy_session()) {
        redirect_to('/');
      }
    }


    // This action is where the user will be able to log in
    public function log_in() {
      require_once('app/views/user/log_in.php');
    }


    // This action is where the user will be able to sign up
    public function sign_up() {
      require_once('app/views/user/sign_up.php');
    }

  }

 ?>
