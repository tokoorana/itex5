<?php

include 'connection.php';

$fid_car = $_GET["fid_car"]; $date_start = $_GET["date_start"];
$time_start = $_GET["time_start"]; $date_end = $_GET["date_end"];
$time_end = $_GET["time_end"]; $cost = $_GET["cost"];

if (!empty($fid_car) && !empty($date_start) 
    && !empty($time_start) && !empty($date_end) 
    && !empty($time_end) && !empty($cost))
    {
    $sql = "INSERT INTO rent(FID_Car, Date_start, Time_start, Date_end, Time_end, Cost) 
            VALUES(:fid_car,:date_start,:time_start,:date_end,:time_end,:cost)";

    $params = [':fid_car'=>$fid_car, ':date_start'=>$date_start, 
               ':time_start'=>$time_start, ':date_end'=>$date_end, 
               ':time_end'=>$time_end, ':cost'=>$cost];

    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);
    echo 'Информация об аренде успешно добавлена!';}
else
{
    echo 'Error!';
}
?>