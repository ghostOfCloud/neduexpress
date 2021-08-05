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
        $this->db = "mydrgvpm_db";//

    

        $connect = new mysqli($this->severname, $this->username, $this->password, $this->db);
        
        return $connect;

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

    public function IdGenerator($table){

        $gen = uniqid(1,2);
        $explode = explode('.', $gen);
        $generated_id = $explode[1];        

        //Check if Generated Id Already exisits on DB
        $sql1 = "SELECT * FROM $table WHERE userid='$generated_id' OR productid='$generated_id' ";
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

    protected function CreateDataTables(){
        $create_table = ("CREATE TABLE IF NOT EXISTS register ( 
            `id` INT NOT NULL AUTO_INCREMENT ,
            `userid` VARCHAR(255) NOT NULL , 
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
            `userid` VARCHAR(255) NOT NULL , 
            `name` VARCHAR(255) NOT NULL , 
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

      
        
   
    }
    
}