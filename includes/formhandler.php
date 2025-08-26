<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favouritePet = htmlspecialchars($_POST["favouritePet"]);

    if(empty($firstName)){
        exit();
        header("Location:../index.php");
    }
    
    echo "This is the data that the user submited";
    echo "<br>"; 
    echo $firstName;
    echo "<br>"; 
    echo $lastName;
    echo "<br>"; 
    echo $favouritePet;
    echo "<br>"; 

    header("Location: ../index.php");
}else{
    header("Location:../index.php");
}