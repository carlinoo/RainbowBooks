<?php

  class BookController extends ApplicationController {

    // This action will display all the books available in the bookstore
    public function index() {
      $books = Book::all();
      require_once('app/views/book/index.php');
    }


    // This function will reserve a book by the current user
    public function reserve($id = nul) {
      model('reservation');

      if ($id == null) {
        redirect_to('book/index');
        return;
      }

      $book = Book::find((int)$id);

      // If there is no book on the database
      if (!$book) {
        redirect_to('book/index');
        return;
      }

      // If the book is reserved already
      if ($book->reserved) {
        redirect_to('book/index');
        return;
      }

      $reservation = Reservation::find($book->ISBN, 'ISBN');

      // If the reservation doesnt exist on the database, create it
      if (!$reservation) {
        $reservation = new Reservation();
      }

      $reservation->ISBN = $book->ISBN;
      $reservation->username = current_user()->username;
      $reservation->reserved_at = date('Y-m-d H:i:s');

      $reservation->save_record('ISBN');

      redirect_to('book/index');
    }
  }

 ?>
