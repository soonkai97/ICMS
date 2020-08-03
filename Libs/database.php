<?php
session_start();

require_once __DIR__ . '/../Libs/config.php';

class DB
{

  public static function connect($value = '')
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icms";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
  }
  public static function run($sql, $args = NULL)
  {
    if (!$args) // if no parameter
      {
        // run the query straight away without parameter binding
        return DB::connect()->query($sql);
      }
    // prepare the sql query
    $stmt = DB::connect()->prepare($sql);
    // execute the query with bind parameter values
    $stmt = DB::connect()->execute($args);
    if(!$stmt){
      print_test($stmt->error);
      exit();
    }
    return $stmt;
  }
}
