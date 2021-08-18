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
}