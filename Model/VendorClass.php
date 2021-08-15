<?php
require "DB.Connect.Table.php";

class Vendor extends Database{
    
    public function UploadProduct($title, $description, $price, $quantity, $category, $image){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->image = $image;


        //Mysql Escape Strings
        $title = mysqli_escape_string($this->connect(), $title);
        $description = mysqli_escape_string($this->connect(), $description);
        $price = mysqli_escape_string($this->connect(), $price);
        $quantity = mysqli_escape_string($this->connect(), $quantity);
        $category = mysqli_escape_string($this->connect(), $category);

        //Create Product table id not existing on the database
        $this->CreateDataTables();

        //Generate ID for Product
        $table = "products";
        $userid = $this->IdGenerator($table);

    }
}


?>