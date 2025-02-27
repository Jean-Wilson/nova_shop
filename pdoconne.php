<?php

try{

$pdo = new PDO("mysql:host=localhost;dbname=pdomine","root","",[]);
echo 'Connection done well';
}

catch( PDOException $e){
    echo "Error: ".$e->getMessage();
}



?>