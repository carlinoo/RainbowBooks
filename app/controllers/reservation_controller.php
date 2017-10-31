<?php

  class ReservationController extends ApplicationController {

    public function index() {
      $user = current_user();

      $reservation = Reservation::where("username = '" . $user->username . "'");

      var_dump($reservation);
    }

  }

 ?>
