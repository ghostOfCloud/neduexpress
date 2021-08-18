<?php
require "DB.Connect.Table.php";

class Vendors extends Database{
    
    public function UploadProduct($title, $description, $price, $quantity, $category, $image){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->image = $image;
        $userid = $_SESSION['userid'];
        // $images = array();

        //Create Product table id not existing on the database
        $this->CreateDataTables();

        //Mysql Escape Strings
        $title = mysqli_escape_string($this->connect(), $title);
        $description = mysqli_escape_string($this->connect(), $description);
        $price = mysqli_escape_string($this->connect(), $price);
        $quantity = mysqli_escape_string($this->connect(), $quantity);
        $category = mysqli_escape_string($this->connect(), $category);

        //Generate ID for Product
        $table = "products";
        $p_id = $this->IdGenerator($table);

        //Move Product Image to destination folder and return img  newname
        $imgs = $this->MoveProductImages($image,$p_id);
        // echo $imgs;


        $sql = "INSERT INTO products SET userid='$userid', p_id='$p_id', name='$title', description='$description', price='$price', quantity='$quantity', category='$category', images='$imgs', status='0', date=NOW() ";
        $query = $this->connect()->query($sql);
        if($query){
            echo "done";
        }else{
            echo "upload failed";
        }
      

        
        

    }
    
}


?>