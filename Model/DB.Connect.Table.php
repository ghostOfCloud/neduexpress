<?php
session_start();

class Database{
    private $severname;
    private $username;
    private $password;
    private $db;
    

    protected function connect(){
        $this->severname = "localhost";
        $this->username = "root";//mydrgvpm_admin
        $this->password = "";//esc1024Bytes
        $this->db = "neduexpr";//

        $connect = new mysqli($this->severname, $this->username, $this->password, $this->db);
        
        return $connect;

    }
 
    protected function CreateDataTables(){
        $create_table = ("CREATE TABLE IF NOT EXISTS register ( 
            `id` INT NOT NULL AUTO_INCREMENT ,
            `userid` INT(11) NOT NULL , 
            `name` VARCHAR(255) NOT NULL , 
            `email` VARCHAR(255) NOT NULL , 
            `password` VARCHAR(255) NOT NULL ,  
            `status` VARCHAR(255) NOT NULL ,   
            `date` DATETIME NOT NULL ,  
            PRIMARY KEY  (`id`),
            UNIQUE (`userid`)
        )ENGINE = InnoDB;");
        $create = $this->connect()->query($create_table);

        $create_table = ("CREATE TABLE IF NOT EXISTS vendors_profile ( 
            `id` INT NOT NULL AUTO_INCREMENT ,
            `userid` INT(11) NOT NULL , 
            `name` VARCHAR(255) NOT NULL , 
            `l_name` VARCHAR(255) NOT NULL , 
            `email` VARCHAR(255) NOT NULL , 
            `phone` VARCHAR(255) NOT NULL , 
            `address` VARCHAR(255) NOT NULL , 
            `store` VARCHAR(255) NOT NULL ,  
            `description` VARCHAR(255) NOT NULL ,  
            `open_hrs` VARCHAR(255) NOT NULL ,  
            `img` VARCHAR(255) NOT NULL ,  
            `status` VARCHAR(255) NOT NULL ,  
            `date` DATETIME NOT NULL ,  
            PRIMARY KEY  (`id`),
            FOREIGN KEY (`userid`) REFERENCES register(`userid`)
        )ENGINE = InnoDB;");
        $create = $this->connect()->query($create_table);

        $create_table = ("CREATE TABLE IF NOT EXISTS products ( 
            `id` INT NOT NULL AUTO_INCREMENT ,
            `userid` INT(11) NOT NULL , 
            `p_id` INT(11) NOT NULL , 
            `name` VARCHAR(255) NOT NULL , 
            `description` VARCHAR(255) NOT NULL , 
            `price` INT(11) NOT NULL , 
            `quantity` INT(11) NOT NULL , 
            `category` VARCHAR(255) NOT NULL ,  
            `images` VARCHAR(950) NOT NULL ,  
            `status` INT(11) NOT NULL ,  
            `date` DATETIME NOT NULL ,  
            PRIMARY KEY  (`id`),
            FOREIGN KEY (`userid`) REFERENCES register(`userid`)
        )ENGINE = InnoDB;");
        $create = $this->connect()->query($create_table);

      
        
   
    }
    
    public function Login($email, $password){  
        $this->email = $email;
        $this->password = $password;

        $email = mysqli_escape_string($this->connect(), $email);
        $password = mysqli_escape_string($this->connect(), $password);

        $email_address = strtolower($email);
        $pass = md5($password);

        $sql = "SELECT * FROM admin WHERE email='$email_address' AND password='$pass' ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if($numRows > 0){
            while($row = mysqli_fetch_assoc($query)){
                $_SESSION["email"] = $row["email"];
                //$_SESSION["userid"] = $row["userid"];
                // $_SESSION["name"] = $row["name"];

                ?><script>window.location='../SuperAdmin/index.php'; </script><?php
            }
        }else{
            $sql = "SELECT * FROM register WHERE email='$email_address' AND password='$pass' ";
            $query = $this->connect()->query($sql);
            $numRow = $query->num_rows;
            if($numRow > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["userid"] = $row["userid"];
                    // $_SESSION["name"] = $row["name"];
    
                    ?><script>window.location='../vendor-dash/vendor-dashboard.php'; </script><?php
                }
            }
            echo "<script>alert('Incorrect email and password'); history.back(); </script>";

        }

    }

    public function UploadFiles($cover){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];

        if($fileError == 0){
            if($fileSize < 5000000){
                $fileDestination = "../File Manager/";
        
                $move = move_uploaded_file($fileTmpName, "../File Manager/".$fileName);

            }else{
                echo "  <script>alert('File Size is too large.. Try Again!!');
                            return false;
                        </script>
                    ";

            }
        }else{
            echo "  <script>alert('Error Occured Uploading File.. Try Again!!');
                        return false; 
                    </script>
                ";
        }
    }

    public function MoveProductImages($image, $p_id){
        // Configure upload directory and allowed file types
        $upload_dir = '../File Manager'.DIRECTORY_SEPARATOR;
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
        $img = array();

        // Define maxsize for files i.e 2MB
        $maxsize = 2 * 1024 * 1024;

        // Loop through each file in files[] array
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {
            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

            // Set upload file path and file New name
            $filepath = $upload_dir.$p_id.$file_name;
            $fileName = $p_id.$file_name;

            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {
                // Verify file size - 2MB max
                if ($file_size < $maxsize) {       
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        array_push($img,$fileName);   
                    }else {                    
                        // return false;
                    }
                        
                }else{ 
                    // return false;
                }
            }

            // print_r($img);

        }
        $imgs = json_encode($img);
        return $imgs;

    }

    public function IdGenerator($table){

        $gen = uniqid(1,2);
        $explode = explode('.', $gen);
        $generated_id = $explode[1];        

        //Check if Generated Id Already exisits on DB
        $sql1 = "SELECT * FROM $table WHERE userid='$generated_id' OR p_id='$generated_id' ";
        $query1 = $this->connect()->query($sql1);
        $numRows1 = $query1->num_rows;
        if($numRows1 > 0){
            do{
                $gen = uniqid(1,2);
                $explode = explode('.', $gen);
                $generated_id = $explode[1];

                $sql1 = "SELECT * FROM $table WHERE userid='$generated_id' OR productid='$generated_id' ";
                $query11 = $this->connect()->query($sql11);
                $rowCheck = $query11->num_rows;
            }while($rowCheck > 0);
        }else{
            $generated_id = $explode[1];        
        }

        return $generated_id;
    }




  
}