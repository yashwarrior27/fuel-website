<?php
function connect() {
    $hostname = 'localhost';
    $dbname = 'humsafar_web';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$hostname;dbname=$dbname";
    try{
   $conn= new PDO($dsn,$username,$password);
   return $conn;
    }
    catch(Exception $e){
       echo $e->getMessage();
    }
}
?>