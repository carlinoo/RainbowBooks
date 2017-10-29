<?php

  class BookController extends ApplicationController {

    // This action will display all the books available in the bookstore
    public function index() {
      $model = model('book');
      $book = Book::find(3, 'edition');
      var_dump($book);
    }
  }

 ?>
