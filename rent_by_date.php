<?php


$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';

try
{
    $dbh = new PDO($dsn, $user, $pass);

    $rent = $_GET["selected_date_rent"];
    
    $rent_by_date = "SELECT rent.Cost 
                     FROM rent 
                     WHERE Date_start < '". $rent ."'";

    $count = 0;

    foreach ($dbh->query($rent_by_date) as $row) {
        $count += $row['Cost'];
    }
        echo array_sum((array)$count) . '<br>';

}
catch(PDOException $e){
    echo "Error!" .$e->getMessage()."<br/>"; die();
}
?>