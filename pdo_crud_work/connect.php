<?php

try{

$pdo = new PDO("mysql:host=localhost;db_name=wilson","root","");
//echo"connected well";


}catch(PDOException $e){
    echo"Echo".$e->getMessage();



}








?>