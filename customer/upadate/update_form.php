<html>

<head>
<?php require '../connection.php' ?>
    <style>
        .butndiv1 {
            padding: 10px;
            margin-top: 20px;
        }

        .button {
            color: black;
            border: solid 1px black;
            border-radius: 0px;
            font-size: 16px;
            width: 245px;
            height: 30px;
            text-decoration: none;
            margin: 2px;
        }

        .edit_modal {
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

        .edit_modal-content {
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

        #myBtn1 {
            height: 30px;
            width: 120;
            float: right;
            margin-top: 50px;
            margin-left: 75%;
        }

        .heading_customer {
            /* display: flex;
            flex-direction: row; */
            width: 100%;
            display: inline-flex;
        }

        .close1 {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            padding-top: 5px;
        }

        .close1:hover,
        .close1:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .edit_modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .edit_modal-content td {
            font-family: monospace;
            font-weight: bold;
        }

        .edit_modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }
    </style>
    <script>
        var modal1 = document.getElementsById("myedit_modal");
        var btn1 = document.getElementById("myBtn1");
        var span1 = document.getElementsByClassName("close1")[0];
        btn1.onclick = function() {
            modal1.style.display = "none";
        }
        span1.onclick = function() {
            alert("x");
            $(".modal1").hide();
            modal1.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>
</head>

<body>
   
    <div class="edit_modal" id="myedit_modal">
        <div class="edit_modal-content" id="model-form">
            <div class="edit_modal-header">
                <span class="close1" onclick="document.getElementById('myedit_modal').style.display='none'">&times;</span>
                <h2>Edit Customer</h2>
            </div>
            <table class="table-condensed">
                
            </table>
            <div class="edit_modal-footer">

            </div>
            </form>
        </div>

    </div>

</body>

</html>