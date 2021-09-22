<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

    <style>
        .header {
            height: 10%;
        }
        .customer{
            height: 90%;
        }

    </style>
</head>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</head>

<body>
    <?php
    require '../connection.php';
 
    require './addcustomer/addcustomer.php';
    require './upadate/update_form.php';
    ?>

    <div id="snackbar">Customer Add Sucessfully</div>
    <div id="snackbar1">Customer Delete Sucessfully</div>
    <div id="snackbar2">Customer Save Sucessfully</div>
    <div>
    <div class="header">
        <?php require '../header.php'; ?>
    </div>
    <div class="customer">
        <div class="heading_customer">
            <h1 style="padding-top: 15px;">Customer Details</h1>
            <!-- <input height="25px" style="margin-left:55%; margin-top:30px; height: 35px;" class="search-box" type="text" autocomplete="off" placeholder="Search by name" /> -->
            <button id="myBtn" class=" btn btn-primary" style="margin-left:70%; margin-top:30px; height: 35px;">Add Customer</button>
        </div>
        <div class="showtable"></div>
    </div>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>
    <script>
        function msgfun(id) {
            if (id == 1) {
                var x = document.getElementById("snackbar");
            } else if (id == 2) {
                var x = document.getElementById("snackbar2");
            } else {
                var x = document.getElementById("snackbar1");
            }

            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }


        //load table ajax
        $(document).ready(function() {
            window.reload_table = function load() {
                $.ajax({
                    url: "./upadate/load_table.php",
                    type: "POST",
                    dataType: "html",
                    success: function(data) {
                        $(".showtable").html(data);
                    }
                });
            }
            window.reload_table();
            $(document).on("click", "#myBtn", function() {
                $('#simpleForm')[0].reset();
                $("#myModal").show();
            });

            // validation form
            $('#simpleForm').validate({ // initialize the plugin
                rules: {
                    fName: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    submitHandler: function(form) { // for demo
                        alert('valid form submitted'); // for demo
                        return false; // for demo
                    }
                }
            });

        });

        //delete data ajax
        $(document).on("click", "#delete-btn", function() {
            if (confirm("Do you want really delete this record")) {
                var customer_id = $(this).data("id");
                var element = this;
                $.ajax({
                    url: "./deleteCustomer/ajax_delete.php",
                    type: "POST",
                    data: {
                        id: customer_id
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(element).closest("tr").fadeOut();
                            window.reload_table();
                            msgfun(3);
                        }
                    }
                });
            }
        });


        // add data ajax
        $("#simpleForm").submit(function(e) {
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var address = $("#address").val();
            var mob_Num = $("#mobNum").val();
            var email = $("#email").val();
            var BirthDate = $("#birthDate").val();
            var country = $('#county option:selected').val();
            var gender = $('#gender option:selected').val();
            var img = $("#imageToUpload").val();

            $.ajax({
                url: "./addcustomer/ajax_addcustomer.php",
                type: "POST",
                data: {
                    fname: fname,
                    lname: lname,
                    address: address,
                    number: mob_Num,
                    email: email,
                    Bdate: BirthDate,
                    country: country,
                    gender: gender,
                    img: img
                },
                success: function(data) {
                    if (data == 1) {
                        $(".modal").hide();

                        window.reload_table();
                        msgfun(1);
                    }
                }
            })
        });

        //edit data ajax
        $(document).on("click", "#edit-btn", function() {
            $(".edit_modal").show();
            var customerid = $(this).data("eid");
            $.ajax({
                url: "./upadate/load-update-form.php",
                type: "POST",
                data: {
                    id: customerid
                },
                success: function(data) {
                    $("#model-form table").html(data);
                }
            });
            $(document).on("click", "#edit-submit", function() {
                var cusId = $("#edit_id").val();
                var editfName = $("#edit_fname").val();
                var editlName = $("#edit_lname").val();
                var editAddress = $("#edit_address").val();
                var editNum = $("#edit_num").val();
                var editEmail = $("#edit_email").val();
                var editBDate = $("#edit_BDate").val();
                var editcountry = $('#editcountry option:selected').val();
                var editgender = $('#editgender option:selected').val();
                $.ajax({
                    url: "./upadate/ajax_update.php",
                    type: "POST",
                    data: {
                        id1: cusId,
                        fname1: editfName,
                        lname1: editlName,
                        address1: editAddress,
                        number1: editNum,
                        email1: editEmail,
                        Bdate1: editBDate,
                        country1: editcountry,
                        gender1: editgender
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(".edit_modal").hide();
                            window.reload_table();
                            msgfun(2);
                        }
                    }
                })
            });
        });

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal || event.target == editmodal) {
                editmodal.style.display = "none";
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>