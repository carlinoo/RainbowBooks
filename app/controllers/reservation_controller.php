<?php

  class ReservationController extends ApplicationController {

    public function index() {
      $user = current_user();

      $reservations = Reservation::where("username = '" . $user->username . "'");

      var_dump($reservations);
    }

  }

 ?>
