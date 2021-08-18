<?php
require "VendorClass.php";

class Products extends Vendors{

    public function HomePageProducts(){


        $sql = "SELECT * FROM products ";
        $query = $this->connect()->query($sql);
        $numRows = $query->num_rows;
        if ($numRows > 0){
            while ($row = $query->fetch_assoc()) {
                $img = json_decode($row["images"]);
                $cover = $img[0];

                $rows[] = "
                    <div class='col-lg-2 col-md-4 col-sm-4 mt-sm-2'>
                        <div class='carousel-prod-list'>
                            <img src='File Manager/$cover' class='img-fluid' style='width:100%; height: 100px'>
                            <div class='p-2'>
                                <a href='product-order.php?ert1@3)\|)9$row[images]erd&&id=$row[p_id]&&cover=$cover' style='padding: 6px 60px 6px 0;'><i> N $row[price] </i></a>
                            </div>
                        </div>
                    </div>
                ";

            }
        }else{
            $rows[] = "No Records Found";
        }

        return $rows;
    }

    public function ProductOrder(){
        $p_id = $_GET["id"];
        $sql = "SELECT * FROM products WHERE p_id={$p_id} ";
        $query = $this->connect()->query($sql);
        $num_rows = $query->num_rows;
        if($num_rows > 0){
            while($row = $query->fetch_assoc()){ 
                $rows[] = $row;
            }
        }else{
           echo "<script>history.back();</script>";
        }

        return $rows;
    }
} 
