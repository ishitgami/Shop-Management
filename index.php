<html>

<head>
    <title>
        Form-Validation
    </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }

        
        .container {
            
            background-color: #eef9fb;
            border-radius: 8px;
            box-shadow: 5px 5px 8px 2px #302f2f60;
            height: 400px;
            width: 700px; 
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .title {
            font-size: 35px;
            margin: 20px;
            font-weight: 900;
        }

        .shop-img {
            display: flex;
            align-items: flex-end;
            align-self: end;
            height: 100%; width: 100%; object-fit: contain;
        }
        /* tr td {
            padding: 5;
        }

        .errMesg {
            color: red;
        } */
    </style>
</head>

<body>
    <?php require 'connection.php' ?>
    <?php require 'header.php'; ?>
    <?php
         $sql = "SELECT firstname FROM  customer ";
         $result = $conn->query($sql);
         if(mysqli_num_rows($result)) {

          }

    ?>
    
    <div class="container" >
    <img src="images/shop.jpg" class="shop-img" alt="">
    <div class="title">
        WelCome To Shop Management
    </div>
    </div>
</body>

</html>