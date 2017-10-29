<?php


  class User extends Application {
    public $id;
    public $username;
    private $password;
    public $first_name;
    public $last_name;
    public $address_line_one;
    public $address_line_two;
    public $city;
    public $telephone;
    public $mobile;


    public function __construct($arr = null) {
      if ($arr != null) {
        $this->id = (int)$arr['id'];
        $this->username = $arr['username'];
        $this->password = $arr['password'];
        $this->first_name = $arr['first_name'];
        $this->last_name = $arr['last_name'];
        $this->address_line_one = $arr['address_line_one'];
        $this->address_line_two = $arr['address_line_two'];
        $this->city = $arr['city'];
        $this->telephone = $arr['telephone'];
        $this->mobile = $arr['mobile'];
      }
    }


  }

 ?>
