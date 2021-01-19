<?php

include_once "../db_info.php";
ob_start();  // Turns on output buffering

date_default_timezone_set("Asia/Seoul");

try{
    $con = new PDO("mysql:dbname=video_tube;host=". $host, $dbname, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}catch(PDOException $e){
    echo "Connection failed :" . $e->getMessage();
}


?>