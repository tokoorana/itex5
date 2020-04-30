<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';

try
{ 
    $dbh = new PDO($dsn, $user, $pass);

$value = $_GET["selected_date"];

$free_auto = "SELECT DISTINCT cars.Name 
              FROM cars, rent 
              WHERE ID_Cars = FID_Car 
              AND Date_start > '". $value ."' 
              OR Date_end < '". $value ."'";

foreach ($dbh->query($free_auto) as $row) 
    {
        echo $row['Name'] . '<br>';
    }
}
catch(PDOException $e){
    echo "Error!" .$e->getMessage()."<br/>"; die();
}
?>