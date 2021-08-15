<?php

require "../Model/SuperAdminClass.php";
$object = new SuperAdmin;


if(isset($_POST["register_vendor"])){
    $name = $_POST["name"];
    $store = $_POST["store"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $cover = $_FILES["file"]["name"];

    $object->RegisterVendor($cover, $name, $store, $email, $phone, $location);


}elseif(isset($_POST["loginVendor"])){
    
}elseif(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $object->Login($email, $password);
    
}

