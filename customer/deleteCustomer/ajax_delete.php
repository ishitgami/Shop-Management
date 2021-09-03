<?php 
 
 $customer_id  = $_POST["id"];

 require "../../connection.php";

 $sql = "DELETE FROM customer WHERE id = {$customer_id}";
 $update_id ="SET @num := 0";

 $update_id1= "UPDATE customer SET id = @num := (@num+1)";

 $update_id2= "ALTER TABLE customer AUTO_INCREMENT =1";

                
        if(mysqli_query($conn,$sql)) {
                echo 1;
        }else {
            echo 0;
        }

?>