<?php

include_once 'db_connect.php';
session_start();


// initializing variables
if(sizeof($_POST) > 0){
    // print_r($_POST);
    // die();

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];


    $s = "select * from registration where username = '$username'";
    echo $s;
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "username already taken";
    }
    else{
        $reg = "insert into registration(username,email,password) values ('$username','$email','$password')";
        mysqli_query($conn,$reg);
        echo "registration successful";
        header("refresh:5, url=login.php");

    } 
    
    // $s = "select * from registration";
    // $result = mysqli_query($conn,$s);
    // print_r($result);
    // die();

}


