<?php 

//starting the session
session_start();

// base url
define('BASE_URL', 'http://localhost/ozpay/');

//Look for this values in your dashboard account on https://dash.ozow.com/

/*
$siteCode = 'WDT-WDT-001';
$privateKey = 'HzHiOfumUq0bDRDugxEV5tHEtrEwYXeK';
$ApiKey = 'TyHlLf46efVRiHvqy0neaLleaRQogGsR';
*/


$siteCode = 'TSTSTE0001';
$privateKey = '215114531AFF7134A94C88CEEA48E';
$ApiKey = 'EB5758F2C3B4DF3FF4F2669D5FF5B';

///
$IsTest = 'false';


class DbConnect{

    private $servername = 'localhost';
    private $dbname = 'ozpay';
    private $username = 'root';
    private $password = '';
    public function connect( ){
        try {
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            return $conn;
        } catch (mysqli_sql_exception $e){
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
        }
    }
}


function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>