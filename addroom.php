<?php
   header('Access-Control-Allow-Origin: *');
   header("Content-Type: application/json; charset-utf-8");

    include('config.ini.php'); 

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);
    
    $dorm_name = $getdata->dorm_name;
    $price = $getdata->price;
    $catagory = $getdata->catagory;
    $sex_c = $getdata->sex_c;
    $numphone = $getdata->numphone;
    $facilities = $getdata->facilities;
    $address = $getdata->address;
   

    $sql = "INSERT INTO dorm(dorm_name,price,catagory,sex_c,numphone,facilities,address) VALUES
    ($dorm_name','$price','$catagory','$sex_c','$numphone','$facilities','$address')";

    $sqlquery = mysqli_query($con,$sql);
    
?>