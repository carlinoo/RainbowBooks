<?php

  class ReservationController extends ApplicationController {


    // This will show the books that are reserved by the current user
    public function index() {
      $user = current_user();

      $reservations = Reservation::where("username = '" . $user->username . "'");

      // $reservation = new Reservation();
      // $reservation->ISBN = Book::find(5)->ISBN;
      // $reservation->username = User::find(1)->username;
      // $reservation->save_record('ISBN');

      require_once('app/views/reservation/index.php');
    }

  }

 ?>
