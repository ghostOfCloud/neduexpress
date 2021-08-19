<?php
require "../Model/VendorClass.php";
$object = new Vendors;

if(isset($_POST["p_upload"])){
    $title = $_POST["p_name"];
    $description = $_POST["p_description"];
    $price = $_POST["p_price"];
    $quantity = $_POST["p_quantity"];
    $category = $_POST["p_category"];
    $image = $_FILES['files']['name'];


    $object->UploadProduct($title, $description, $price, $quantity, $category, $image);
}elseif(isset($_POST["p_edit"])){
    $p_id = $_POST["p_id"];
    $title = $_POST["p_name"];
    $description = $_POST["p_description"];
    $price = $_POST["p_price"];
    $quantity = $_POST["p_quantity"];
    $category = $_POST["p_category"];


    $object->EditProduct($title, $description, $price, $quantity, $category, $p_id);
}elseif(isset($_POST["save_profile"])){
    $fname = $_POST["fname"];
    $l_name = $_POST["lname"];
    $email = $_POST["email"];
    $store_name = $_POST["store_name"];
    $store_desc = $_POST["store_desc"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];

    $object->EditProfile($fname, $l_name, $email, $store_name, $store_desc, $location, $phone);

}