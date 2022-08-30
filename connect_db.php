<?php

$dsn = "mysql:host=localhost;dbname=formoperation";
$user = "root";
$pass="";

try{
    $con = new PDO($dsn , $user , $pass);
    echo("<h1>connected</h1>");

}catch(PDOException $e){
    echo "error" . $e->getMessage();
    echo("not connected");
}

?>