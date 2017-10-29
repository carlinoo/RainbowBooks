<?php

  class Application {


    // this method will get all the objects of a table called from the child and return them
    public static function all() {
      $class = get_called_class();
      $all = [];
      $db = DB::connect();

      // We dont bind the param $class as it is only the caller of this function
      $results = $db->prepare('SELECT * FROM ' . $class);
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
    } // end all()





    // This method will return an object queried from the database
    public static function find($id, $column = false) {
      $class = get_called_class();
      $db = DB::connect();

      // If $column is set, add change the condition
      if (!$column) {
        $column = "id";
      }

      // Check that $column exists on the table
      if (!in_array($column, $class::get_column_names())) {
        return null;
      }

      $result = $db->prepare('SELECT * FROM ' . $class . ' WHERE ' . $column . ' = :id');
      $result->bindParam(':id', $id, PDO::PARAM_INT);

      $result->execute();

      $result = $result->fetch(PDO::FETCH_ASSOC);

      return new $class($result);
    } // end find()





    // This will retrieve all columns from a table
    public static function get_column_names() {
      $class = get_called_class();
      $db = DB::connect();

      $result = $db->prepare('DESCRIBE ' . $class);
      $result->execute();
      $result = $result->fetchAll(PDO::FETCH_COLUMN);

      return $result;
    } // end get_column_names()



    // The following will add Relations
    public static function has_one($relation) {
      require_once($relation);
    }

  }


 ?>
