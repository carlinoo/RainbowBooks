<?php

  class Application {


    // this method will get all the objects of a table called from the child and return them
    public static function all() {
      $class = get_called_class();
      $all = [];
      $db = DB::connect();

      $results = $db->prepare('SELECT * FROM Book');
      $results->bindParam(':object', $class);
      $results->execute();
      $results = $results->fetchAll();

      echo "<br><br><br>" . count($results) . "<br><br>";

      // We create a list of the objects from the database results
      foreach($results as $obj) {
        $item = new $class($obj);
        $all[] = $item;
        //var_dump($item);
      }

      return $all;
    }

  }


 ?>
