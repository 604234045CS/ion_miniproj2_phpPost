<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

$score = $getdata->score;
$dorm_id = $getdata->dorm_id;

$sql = "INSERT INTO score(crore_point,dorm_id,member_id) VALUES
    ($score','$dorm_id',NULL)";

$sqlquery = mysqli_query($con,$sql);


?>