<?php

require "../Model/SuperAdminClass.php";
$object = new SuperAdmin;


if(isset($_POST["registerVendor"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["address"];
    $cover = $_FILES["file"]["name"];

    $object->RegisterVendor($cover, $name, $email, $phone, $location);


}elseif(isset($_POST["loginVendor"])){
    
}

