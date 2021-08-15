<?php
require "DB.Connect.Table.php";

class SuperAdmin extends Database {

    public function RegisterVendor($cover, $name, $store, $email, $phone, $location){
        // $this->category = $category;
        $this->name = $name;
        $this->store = $store;
        $this->email = $email;
        $this->phone = $phone;
        $this->location = $location;
        $this->cover = $cover;
        $pass = "neduexpr123456";
        $password = md5($pass);

        $this->CreateDataTables();
        // $category = mysqli_escape_string($this->connect(), $category);
        $name = mysqli_escape_string($this->connect(), $name);
        $store = mysqli_escape_string($this->connect(), $store);
        $email = mysqli_escape_string($this->connect(), $email);
        $phone = mysqli_escape_string($this->connect(), $phone);
        $location = mysqli_escape_string($this->connect(), $location);

        $table = "vendors_profile";
        $email_address = strtolower($email);
        $userid = $this->IdGenerator($table);

        //Check email if already registered
        $sql = "SELECT email FROM register WHERE email='$email_address'";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if($numRows > 0){
            echo "<script>alert('The Email Address Already Exists');  history.back(); </script>";
            die();
        }

        $this->UploadFiles($cover);


        //Create  Registration Details
        $insert_reg = "INSERT INTO register SET userid ='$userid', email ='$email_address', name ='$name', password ='$password', status ='0', date=NOW()";
        $query_reg = $this->connect()->query($insert_reg);
        if($query_reg){
            $insert = "INSERT INTO vendors_profile SET userid='$userid', name='$name', email='$email_address', phone='$phone', store='$store', address='$location', img='$cover', status='0', date=NOW() ";
            $insert_query = $this->connect()->query($insert);    
            if($insert_query){
                // $this->SendVendorDetails();
                echo "<script type='text/javascript'> alert('Vendor Registration Completed'); history.back(); </script>";
            }else{
                echo "<script type='text/javascript'> alert('Registration Failed, Try Again later'); history.back(); </script>";
            }
        }else{
            echo "<script type='text/javascript'> alert('Registration Failed, Try Again later'); history.back(); </script>";
            die();
        }



    }

    public function GetVendorDetails(){
        $userid = $_GET["userid"];
        $email = $_GET["email"];

        $sql = "SELECT * FROM vendors_profile WHERE userid='$userid' AND email='$email' ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if($numRows > 0){
            while($row = $query->fetch_assoc()){
                $user[] = $row;

            }
        }else{
            echo "<script> history.back();</script>";
            die();
        }

        return $user;
    }

    public function EditVendorDetails(){
        $this->userid = $userid;
        $this->email = $email;

        $userid = mysqli_escape_string($this->connect(), $userid);
        $email = mysqli_escape_string($this->connect(), $email);

        $email_address = strtolower($email);

        $update = "UPDATE vendors_profile SET name='$name', email='$email_address', phone='$phone', location='$location', cover='$cover', status='0', date=NOW() ";
        $update_query = $this->query($update);
        if($update_query){
            echo "<script type='text/javascript'> alert('Vendor details updated successfully'); </script>";
        }else{
            echo "<script type='text/javascript'> alert('Failed to update vendor details'); </script>";
        }


    }

    public function DeleteVendor(){
        $this->userid = $userid;
        $this->email = $email;

        $delete = "DELETE FROM vendors_profile WHERE userid = $userid AND email = $email";
        $delete_query = $this->query($delete);
        if($delete_query){
            echo "<script type='text/javascript'> alert('Deleted'); </script>";
        }else{
            echo "<script type='text/javascript'> alert('Failed'); </script>";
        }
    }

    public function DisableVendor(){
        $this->userid = $userid;
        $this->email = $email;

        $disable = "UPDATE vendor SET status ='5', date=NOW() WHERE userid = '$userid'AND email = '$email' ";
        $disable_query = $this->query($disable);
        if($disable_query){
            echo "<script type='text/javascript'> alert('Vendor account disabled successfully'); </script>";
        }else {
            echo "<script type='text/javascript'> alert('failed to disable account try again later'); </script>";
        }
    }

    public function ViewListOfRegisteredVendorAccounts(){
        $select = "SELECT * FROM register ORDER BY id DESC ";
        $query = $this->connect()->query($select);
        $numRows = $query->num_rows;
        if($numRows > 0){
            while($row = $query->fetch_assoc()){
                if($row["status"] == "0"){
                    $status = "Pending";
                }else if($row["status"] == "1"){
                    $status = "Active";
                }else {
                    $status = "In Valid";
                }
                $rows[] = "
                    <tr>
                        <td>$row[date]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$status</td>
                        <td><a href='vendor-profile.php?userid=$row[userid]&&email=$row[email]' type='button' class='btn btn-primary'><span class='fa fa-gear'></span> View Profile </a></td>
                    </tr>
                ";
            }
        }else{
            $rows[] = "NO RECORD FOUND";
        }

        return $rows;

    }
}