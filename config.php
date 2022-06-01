<?php 

//starting the session
session_start();

// base url - Change to your website - for mine i'm using a https://ding.icu/ozpay 
define('BASE_URL', 'http://localhost/ozpay/'); // use this if you are testing it on localhost with xampp

//Look for this values in your dashboard account on https://dash.ozow.com/
$siteCode = 'TSTSTE0001'; // change this to your real sitcode and the rest below
$privateKey = '215114531AFF7134A94C88CEEA48E';
$ApiKey = 'EB5758F2C3B4DF3FF4F2669D5FF5B';

/// controll the testing, true for testing and false for production.
$IsTest = 'false';


class DbConnect{ //Update this to your database details.

    private $servername = 'localhost';
    private $dbname = 'ozpay'; //database name
    private $username = 'root'; // database username
    private $password = ''; // database password, leave it empty if you are using xampp
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