<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';

try
{
    $dbh = new PDO($dsn, $user, $pass);

    $data = $_GET;

    $sth = $dbh->prepare("UPDATE cars 
                        SET Race = ? 
                        WHERE Name = ?;");
                        
    $sth->execute(array($data['race'], $data['car_name']));

    echo "Информация о пробеге успешна изменена!";
}
catch(PDOException $e){
    echo "Error!" .$e->getMessage()."<br/>"; die();
}
    
?>