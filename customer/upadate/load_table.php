<?php 
    require "../../connection.php";


    $sql = "SELECT  CONCAT(firstName , ' ' , lastname) AS name,address1, Mobile_num,Email,Birth_date,Gender,Country,id,img  FROM customer";
            $no = 1;
            $output = "";
            $gender = "";
            $result = $conn->query($sql);
            
           

            if(mysqli_num_rows($result) >0 ) {
                $output = "
                <table  class='table table-sm table-hover table-condensed' style='width:100%'>
                    <thead>
                        <tr class='table-success'>
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Gender</th>
                            <th>Birth date</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
            

                while ($row = $result->fetch_assoc()) {

                    switch ($row["Gender"]) {
                        case "0" :
                            $row["Gender"] = "Male";
                            break;
                        case "1" :
                            $row["Gender"] = "Female";
                            break;
                        case "2" :
                            $row["Gender"] = "Other";
                            break;
                    }
                    switch ($row["Country"]) {
                        case "0" :
                            $row["Country"] = "India";
                            break;
                        case "1" :
                            $row["Country"] = "UK";
                            break;
                        case "2" :
                            $row["Country"] = "USA";
                            break;
                        case "3" :
                            $row["Country"] = "Africa";
                            break;
                    }
                    
                    
                $cid = $row["id"]; 
                $output .= "  
                        <tr>
                            <td>$no</td>
                            <td>{$row["name"]}</td>
                            <td>{$row["address1"]}</td>
                            <td>{$row["Email"]}</td>
                            <td>{$row["Mobile_num"]}</td>
                            <td>{$row["Gender"]}</td>
                            <td>{$row["Birth_date"]}</td>
                            <td>{$row["Country"]}</td>
                            <td>
                                <img src='../images/icon/edit.png'  width='20px' height='20px' id='edit-btn' style='cursor: pointer;' data-eid='{$row["id"]}'>
                                <img src='../images/icon/delete.png' style='margin-left: 20px;cursor: pointer;' width='20px' height='20px'  id='delete-btn' data-id='{$row["id"]}'>
                            </td>
                        </tr>";
                $no++;
            }
            $output .= " </tbody></table>";
        }
        echo $output;
?>
