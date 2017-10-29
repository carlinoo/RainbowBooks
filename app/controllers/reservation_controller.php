<?php

  class ReservationController extends ApplicationController {

    public function index() {
      echo "<br><br>";
      model('reservation');
      model('book');
      model('user');

      $cat = Category::last();
      $book = Book::last();
      //$user = User::last();

      $book->author = "Alicia ONieall";
      var_dump($book);
      echo "<br><br>";

      $book1 = new Book(array(
        "ISBN" => "000-000000",
        "title" => "Dragon Ball",
        "author" => "Yorishima Shai",
        "edition" => "1",
        "category" => $cat->id,
        "year" => 1991
      ));

      //var_dump($book->update_object());
      var_dump($book);
      echo "<br><br><br>";

      $this->render_view('reservation/index');
      //$book->reserve_book_by($user);
    }

  }

 ?>
