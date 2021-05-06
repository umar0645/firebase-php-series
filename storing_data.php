<?php
include("includes/db.php");

if(isset($_POST['push'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];
    $ref = "contact_form_data/";
    $pushData = $database->getReference($ref)->push($data);
    header("Location:home.php");
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];
    $ref = "contact_form_data/";
    $pushData = $database->getReference($ref)->set($data);
}


?>