<?php
class Database
{
    ####localhost 
    //private $dbServer = 'mail.cc.pcs-plp.com'; private $dbUser = 'itpcs'; private $dbPassword = 'Pcs@1234'; private $dbName = 'db_eservice_new'; //ON SERVER;
    
    //172.16.61.38    mqtteioc    mqtt.jwdcoldchain.com       user  =  eioc	pass  =l;ylfu8iy[

    ####Server
    private $dbServer = 'mqtt.jwdcoldchain.com'; 
    private $Port='3306'; 
    private $dbUser = 'eioc'; 
    private $dbPassword = 'l;ylfu8iy['; 
    private $dbName = 'mqtteioc';

    protected $conn; //protected public
    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbServer}; port={$this->Port}; dbname={$this->dbName}; charset=utf8";
            $options  = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci'"
              ];
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
            echo "oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooook"; //die;
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}


/*
//db_requisition
$serverName ='localhost';
$dbName ='db_requisition';
$userName ='root';
$userPassword ='';

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $userPassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/


?>    
