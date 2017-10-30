<?php

  class BookController extends ApplicationController {

    // This action will display all the books available in the bookstore
    public function index() {
      $books = Book::all();
      require_once('app/views/book/index.php');
    }
  }

 ?>
