<?php 
function db()
{
    $username="root";
    $password="root";
    $servername="172.17.0.1:3306";
    $db="mydb";


    $conn = new mysqli($servername, $username, $password, $db);

        if($conn->connect_error)
        {
            die("Connessione fallita: " . $conn->connect_error);

        }

        return $conn;
}
?>