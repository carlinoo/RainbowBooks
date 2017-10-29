<?php

  model('category');

  class Book extends Application {
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
        $this->ISBN = $arr['ISBN'];
        $this->title = $arr['title'];
        $this->author = $arr['author'];
        $this->edition = (int)$arr['edition'];
        $this->year = (int)$arr['year'];
        $this->category = Category::find((int)$arr['category']);
        $this->reserved = (boolean)$arr['reserved'];


      }
    }
  }

 ?>
