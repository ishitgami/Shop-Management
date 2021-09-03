<?php 
 require '../../connection.php';

 $customer_id1  = $_POST["id1"];
 $fname1  = $_POST["fname1"];
 $lname1  = $_POST["lname1"];
 $address11  = $_POST["address1"];
 $email11  = $_POST["email1"];
 $mobNum1  = $_POST["number1"];
 $BDate1  = $_POST["Bdate1"];
 $country1 = $_POST["country1"];
 $gender1 = $_POST["gender1"];

 $sql = "UPDATE customer SET firstname='{$fname1}' ,lastname='{$lname1}' ,address1='{$address11}',Email='{$email11}',Mobile_num='{$mobNum1}',Birth_date='{$BDate1}', Gender='{$gender1}', Country='{$country1}' WHERE id = {$customer_id1}";
                
        if(mysqli_query($conn,$sql)) {
                echo 1;
        }else {
           
            echo("Error description: " . $mysqli -> error);
        }

 
?>