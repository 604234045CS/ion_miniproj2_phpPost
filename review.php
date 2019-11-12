<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

$text = $getdata->text;
$dorm_id = $getdata->dorm_id;


$sql = "INSERT INTO review(review_detail,dorm_id,member_id) VALUES
    ('$text','$dorm_id',NULL)";

$sqlquery = mysqli_query($con,$sql);

?>