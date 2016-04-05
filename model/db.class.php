<?php

class db{

private static $instance = NULL;
private function __construct() {
  /* Set the dbname here */
}

/**
* @return object (PDO)
* @access public
*/
public static function getInstance() {

if (!self::$instance)
    {
    self::$instance = new PDO("mysql:host=localhost;dbname=MiPHP", 'user', 'pass');;
    self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
return self::$instance;
}

private function __clone(){
}

}
