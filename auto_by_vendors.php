<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';

try
{
    $dbh = new PDO($dsn, $user, $pass);

    $value = $_GET["vendor"];
    $auto_by_vendors = "SELECT cars.Name 
                        FROM cars, vendors 
                        WHERE FID_Vendors=ID_Vendors 
                        AND vendors.Name='". $value ."'";

    foreach ($dbh->query($auto_by_vendors) as $row) {
        echo $row['Name'] . '&nbsp;';
    }
}
catch(PDOException $e){
    echo "Error!" .$e->getMessage()."<br/>"; die();
}
?>