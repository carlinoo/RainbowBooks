<?php

  model('book');
  model('user');

  class Reservation extends Application {
    public $id;
    public $ISBN;
    public $username;
    public $reserved_at;


    public function __construct($arr = null) {
      if ($arr != null) {
        $this->id = (int)$arr['id'];
        $this->$ISBN = $arr['ISBN'];
        $this->username = $arr['username'];
        $this->reserved_at = $arr['reserved_at'];
      }
    }
  }

 ?>
