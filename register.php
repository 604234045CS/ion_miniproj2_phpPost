<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset-utf-8");

    include('config.ini.php'); 

    $contentdata = file_get_contents("php://input");
    $getdata = json_decode($contentdata);
    
    $name = $getdata->name;
    $surname = $getdata->surname;
    $email = $getdata->email;
    $username = $getdata->username;
    $password = $getdata->password;

    $sql = "INSERT INTO member(name,surname,email,username,password) VALUES
    ('$name','$surname','$email','$username','$password')";

    $sqlquery = mysqli_query($con,$sql);
    
?>