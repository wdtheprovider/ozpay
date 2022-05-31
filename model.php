<?php 

include 'config.php';

function loadCompanySettings(){
    $db = new DbConnect;
    $conn = $db->connect();

    $sql = "SELECT * FROM settings";

    $row = $conn->query($sql);

    return $row;
}

?>