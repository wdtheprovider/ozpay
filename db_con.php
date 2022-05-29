<?php 

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
?>