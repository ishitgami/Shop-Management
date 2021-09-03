 <?php 
    require "../../connection.php";

    $fname  = $_POST["fname"];
    $lname  = $_POST["lname"];
    $address1  = $_POST["address"];
    $email1  = $_POST["email"];
    $mobNum  = $_POST["number"];
    $BDate  = $_POST["Bdate"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $img = $_POST["img"];

    $sql = "INSERT INTO customer (firstname,lastname, address1, Mobile_num,Email,Birth_date,Country,Gender)
    VALUES ('$fname','$lname', '$address1','$mobNum','$email1','$BDate','$country','$gender')";

if(mysqli_query($conn,$sql)) {

    echo 1;
}else {
echo 0;
}
?>  
