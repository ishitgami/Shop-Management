<html>

<head>
    <style>
        .butndiv {
            padding: 10px;
            margin-top: 20px;
        }

        .button {
            width: 245px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 37%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }


        .heading_customer {
            /* display: flex;
            flex-direction: row; */
            width: 100%;
            display: inline-flex;
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-top: 20px;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            text-align: right;
            background-color: #5cb85c;
            color: white;
        }

        .modal-content td {
            font-family: monospace;
            font-weight: bold;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }
    </style>

</head>

<body>
    <?php require '../connection.php' ?>
    <div class="modal" id="myModal">
        <div class="modal-content">
            <div class="modal-header">

                <h2 class="text-left">Add Customer</h2>
                <span class="close" onclick="document.getElementById('modal').style.display='none'">&times;</span>
            </div>
            </form>
            <form name="simpleForm" id="simpleForm">
                <table style="margin: 12px 20px;">

                    <tr class="form-group">
                        <td>
                            <label for="firstName">FIRST NAME</label>
                            <input type="text" id="fname" name="fName" size="75" class="form-control">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td>
                            <label for="Name">LAST NAME</label>
                            <input type="text" id="lname" name="lName" size="75" class="form-control">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                    </tr>
                    <tr style="margin-top: 10px;">
                        <td>
                            <label for="Name">ADDRESS</label>
                            <input type="text" class="form-control" id="address" name="address" size="75">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>

                        </td>
                    </tr>

                    <tr style="margin-top: 20px;">
                        <td>
                            <label for="Name">MOBILE NUMBER</label>
                            <input type="numbrer" class="form-control" id="mobNum" name="mobileNo" size="34">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Name">EMAIL</label>
                            <input class="form-control" type="text" id="email" name="email" size="35">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                    </tr>

                    <tr class="form-inline" style="margin-top: 10px;">
                        <td>
                            <label class="text-right" for="gender" class="formtext">GENDER</label>
                            <select id="gender" name="gender" style="width: 100px;" class="form-control">

                                <option name="male" value="0">Male</option>
                                <option name="female" value="1">Female</option>
                                <option name="other" value="2">Other</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                        <td style="margin-left:5%;">
                            <label for="country" class="formtext">COUNTRY</label>
                            <select id="county" name="country" style="width: 100px;" class="form-control">

                                <option name="India" value="0">India</option>
                                <option name="UK" value="1">UK</option>
                                <option name="USA" value="2">USA</option>
                                <option name="Africa" value="3">Africa</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                        <td style="margin-left:5%;">
                            <label for="birthdate" class="formtext">BIRTH-DATE</label>
                            <input type="date" id="birthDate" name="birthDate" class="form-control">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="formtext" style="margin-top: 25px;" for="Name">Image</label>
                            <input type="file" name="imageToUpload" id="imageToUpload">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>

                        </td>
                    </tr>

                    <tr class="row">
                        <td class="col">
                            <button class="btn btn-primary" style="margin-top:20px;margin-left:50%;" type="reset">Reset</button>
                        </td>
                        <td class="col">
                            <input type="submit" class="btn btn-primary " style="margin-top:20px;margin-right:10%;" id="add_recordbtn">
                            <!-- <button class="btn btn-primary "  style="margin-top:20px;margin-right:10%;" type="submit" id="add_recordbtn" >SAVE</button> -->
                        </td>
                    </tr>


                </table>
            </form>

        </div>
    </div>


    <?php
    if (isset($_POST['submit'])) {
        //Process the image that is uploaded by the user
    }
    ?>

</body>

</html>