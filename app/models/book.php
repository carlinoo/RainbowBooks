<?php

  model('category');

  class Book extends Application {
    public $id;
    public $ISBN;
    public $title;
    public $author;
    public $edition;
    public $year;
    public $category;
    public $reserved;


    // Constructor function that takes all the variables as an argument
    function __construct($arr = null) {
      if ($arr != null) {
        $this->id = array_key_exists('id', $arr) ? (int)$arr['id'] : null;
        $this->ISBN = $arr['ISBN'];
        $this->title = $arr['title'];
        $this->author = $arr['author'];
        $this->edition = (int)$arr['edition'];
        $this->year = (int)$arr['year'];
        $this->category = array_key_exists('category_id', $arr) ? Category::find((int)$arr['category_id']) : null;
        $this->reserved = array_key_exists('reserved', $arr) ? (boolean)$arr['reserved'] : null;
      }
    }



    // This method will reserve a Book
    public function reserve_book_by($user) {
      $this->update_attributes(array("reserved" => 1));
    }
  }

 ?>
