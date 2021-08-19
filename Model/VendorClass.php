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

    public function AllProducts(){
        $userid = $_SESSION["userid"];

        $sql = "SELECT * FROM products WHERE userid={$userid} ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if($numRows > 0){
            while($row = $query->fetch_assoc()){
                $img = json_decode($row["images"]);
                $cover = $img[0];

                $rows[] = "
                    <div class='col-md-4 col-sm-6 col-6'>
                        <div class='product-order-body-img'>
                            <a href='items-details.php?ert1@3)\|)9$row[images]erd&&id=$row[p_id]&&cover=$cover'>
                                <img src='../File Manager/$cover' class='img-fluid'>
                            </a>
                        </div>
                    </div>
                ";

            }
        }else{
            $rows[] = "No Record Found";
        }
        return $rows;

    }

    public function ItemDetail(){
        $p_id = $_GET["id"];

        $sql = "SELECT * FROM products WHERE p_id ={$p_id} ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if ($numRows > 0){
            while($row = $query->fetch_assoc()){
                $rows[] = $row;
            }

        }else{
            echo "<script> history.back(); </script>";
        }

        return $rows;

    }

    public function EditProduct($title, $description, $price, $quantity, $category, $p_id){
        $this->p_id = $p_id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
        $userid = $_SESSION['userid'];
    
        //Mysql Escape Strings
        $p_id = mysqli_escape_string($this->connect(), $p_id);
        $title = mysqli_escape_string($this->connect(), $title);
        $description = mysqli_escape_string($this->connect(), $description);
        $price = mysqli_escape_string($this->connect(), $price);
        $quantity = mysqli_escape_string($this->connect(), $quantity);
        $category = mysqli_escape_string($this->connect(), $category);

    
        $sql = "UPDATE products SET name='$title', description='$description', price='$price', quantity='$quantity', category='$category', status='0' WHERE  p_id={$p_id} ";
        $query = $this->connect()->query($sql);
        if($query){
            echo "done";
        }else{
            echo "upload failed";
        }
      

        
        

    }

    public function VendorProfile(){
        $userid = $_SESSION["userid"];

        $sql = "SELECT * FROM vendors_profile WHERE userid ={$userid} ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if ($numRows > 0){
            while($row = $query->fetch_assoc()){
                $rows[] = $row;
            }

        }else{
            echo "<script> history.back(); </script>";
        }

        return $rows;

    }

    public function EditProfile($fname, $l_name, $email, $store_name, $store_desc, $location, $phone){
        $this->fname = $fname;
        $this->l_name = $l_name;
        $this->email = $email;
        $this->store_name = $store_name;
        $this->store_desc = $store_desc;
        $this->location = $location;
        $this->phone = $phone;
        $userid = $_SESSION['userid'];
    
        //Mysql Escape Strings
        $fname = mysqli_escape_string($this->connect(), $fname);
        $l_name = mysqli_escape_string($this->connect(), $l_name);
        $email = mysqli_escape_string($this->connect(), $email);
        $store_name = mysqli_escape_string($this->connect(), $store_name);
        $store_desc = mysqli_escape_string($this->connect(), $store_desc);
        $location = mysqli_escape_string($this->connect(), $location);
        $phone = mysqli_escape_string($this->connect(), $phone);

    
        $sql = "UPDATE vendors_profile SET name='$fname', l_name='$l_name', email='$email', store='$store_name', description='$store_desc', address='$location', phone='$phone', status='0' WHERE  userid={$userid} ";
        $query = $this->connect()->query($sql);
        if($query){
            echo "done";
        }else{
            echo "upload failed";
        }
      

        
        

    }

    
}


?>