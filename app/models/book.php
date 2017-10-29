<?php
  class Book extends Application {
    public $ISBN;
    public $title;
    public $author;
    public $edition;
    public $year;
    public $category;
    public $reerved;

    // Constructor function that takes all the variables as an argument
    function __construct($arr = null) {
      if ($arr != null) {
        $this->ISBN = $arr['ISBN'];
        $this->title = $arr['title'];
        $this->author = $arr['author'];
        $this->edition = $arr['edition'];
        $this->year = $arr['year'];
        $this->category = $arr['category'];
        $this->reserved = $arr['reserved'];
      }
    }
  }

 ?>
