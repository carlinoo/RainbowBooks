<?php
  class DB {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function connect() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO("mysql:host=" . $_ENV['database_host'] . ";dbname=" . $_ENV['database_name'], $_ENV['database_username'], $_ENV['database_password'], $pdo_options);
      }
      return self::$instance;
    }
  }
?>
