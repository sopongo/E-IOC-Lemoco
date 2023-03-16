<?php

class Database
{
    ####localhost 
    //private $dbServer = 'localhost'; private $dbUser = 'root'; private $dbPassword = ''; private $dbName = 'db_e-service';
    private $dbServer = 'mqtt.jwdcoldchain.com'; private $port='33906'; private $dbUser = 'eioc'; private $dbPassword = 'l;ylfu8iy['; private $dbName = 'mqtteioc'; //ON SERVER;
    //private $dbServer = '172.16.61.38'; private $port='33906'; private $dbUser = 'eioc'; private $dbPassword = 'l;ylfu8iy['; private $dbName = 'mqtteioc'; //ON SERVER;
    

/*
172.16.61.38
mqtt.jwdcoldchain.com
MIS	HV02	itpcs	Pcs@1234		
Ubuntu 2004 with mosquito / pass for mosq (admin:admin1234. , eioc:abcd@cc)			MySql HostName	user  =  eioc	pass  l;ylfu8iy[
*/    
    
    ####Server
    //private $dbServer = 'mail.cc.pcs-plp.com'; private $dbUser = 'itpcs2'; private $dbPassword = 'Pcs@1234Pcs@1233'; private $dbName = 'db_centralstore_online';
    //private $dbServer = 'mail.cc.pcs-plp.com'; private $dbUser = 'itpcs'; private $dbPassword = 'Pcs@1234'; private $dbName = 'db_centralstore_online';
    
    protected $conn; //protected public
    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbServer}; port={$this->port}; dbname={$this->dbName}; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
            //echo "oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooook"; die;
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
