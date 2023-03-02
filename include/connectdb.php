<?php
//require_once __DIR__ . '/mysecret.php';

function connect_database()
{
  $user = "eioc";
  $password =  "l;ylfu8iy[";
  $database = "mqtteioc";
  $host = "mqtt.jwdcoldchain.com";
  $port = "3306";

  try {
    $options  = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_PERSISTENT => true,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'"
    ];
    $db = new PDO(
      "mysql:host=$host;port=$port;dbname=$database;charset=utf8",
      $user,
      $password,
      $options
    );
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
}
