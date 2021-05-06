<?php
include("includes/db.php");

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $ref = $_POST['ref'];
    
    $data = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];
    
    $pushData = $database->getReference($ref)->update($data);
    header("Location:home.php");
}
else if(isset($_GET['key'])){
    $database->getReference("contact_form_data/".$_GET['key'])->remove();
    header("Location:retrieve_data.php");
}

?>