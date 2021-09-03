
<?php
    require "../../connection.php";
    $customerId;
    $customerId = $_POST["id"];

    $sql = "SELECT firstname,lastname, address1, Mobile_num,Email,Birth_date,Gender,Country,id FROM customer WHERE id ={$customerId}";
    $output1 ="";
    $gender1= $gender2= $gender3 = "";
    $country1 =  $country2 =  $country3 =  $country4 = "";



    $result = $conn->query($sql);
    if(mysqli_num_rows($result)) {
       
        while ($row = mysqli_fetch_assoc($result)) {
            switch ($row["Gender"]) {
                case "0" :
                    $gender1 = "selected";
                    break;
                case "1" :
                    $gender2 = "selected";
                    break;
                case "2" :
                    $gender3 = "selected";
                    break;
                }

                switch ($row["Country"]) {
                    case "0" :
                        $country1 = "selected";
                        break;
                    case "1" :
                        $country2 = "selected";
                        break;
                    case "2" :
                        $country3 = "selected";
                        break;
                    case "3" :
                        $country4 = "selected";
                        break;
                    }

            $output1 .= 
            "<tr>
                <th><label for='Name' class='formtext'>FIRST NAME</label>
                </th>
                <td>
                    <input type='text' name='updateName' id='edit_fname' size='40' class='inputPadding form-control' value='{$row["firstname"]}'>
                    <input type='text' name='updateName' id='edit_id' hidden value='{$row["id"]}'>
                </td>
            </tr>

            <tr>
                <th><label for='Name' class='formtext'>LAST NAME</label>
                </th>
                <td>
                    <input type='text' name='updateName' id='edit_lname' size='40' class='inputPadding form-control' value='{$row["lastname"]}'>
                    
                </td>
            </tr>

            <tr class='formtext'>
                <th >
                    <label for='Name' class='formtext'>ADDRESS</label>
                </th>
                <td>
                    <input type='text' id='edit_address' name='updateaddress' size='40' class='form-control' value='{$row["address1"]}'>
                </td>
            </tr>

            <tr>
                <th>
                    <label for='Name' class='formtext'>MOBILE NUMBER</label>
                </th>
                <td>
                    <input type='numbrer' id='edit_num' name='updatemobileNo' size='40' class='form-control' value='{$row["Mobile_num"] }'>
                </td>
            </tr>

            <tr>
                <th>
                    <label for='Name' class='formtext'>EMAIL</label>
                </th>
                <td>
                    <input type='text' name='updateemail' id='edit_email' size='40' class='form-control' value='{$row["Email"]}'>
                </td>
            </tr>

            <tr>
                <th>
                    <label for='gender' class='formtext'>GENDER</label>
                </th>
                <td>
                    <select id='editgender' class='form-control' name='updategender' id='gender' style='width: 100px;'>
                        <option name='male' $gender1 value='0'>Male</option>
                        <option name='female' $gender2 value='1' >Female</option>
                        <option name='other'  $gender3 value='2'>Other</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th> 
                    <label for='country' class='formtext'>COUNTRY</label>
                </th>
                <td>
                    <select id='editcountry' class='form-control' name='updatecountry' style='width: 100px;' id='updatecountry1'>
                    ?><?php
                    <option value='none' selected disabled hidden>
                         Select an Option
                            </option>
                        <option name='India' $country1 value='0' >India</option>
                        <option name='UK' $country2 value='1' >UK</option>
                        <option name='USA' $country3 value='2'>USA</option>
                        <option name='Africa' $country4 value='3'>Africa</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>
                    <label for='birthdate' class='formtext'>BIRTH-DATE</label>
                </th>
                <td>
                    <input type='date' id='edit_BDate' class='form-control' name='updatebirthDate' value='{$row["Birth_date"]}'>
                </td>
            </tr>

            <tr>
                <td colspan='1' style='padding-left: 50%;' >
                    <button type='submit' id='edit-submit' class='btn btn-primary' >SAVE</button>
                </td>
            </tr>";
        }                
    }
    echo $output1;
?>

