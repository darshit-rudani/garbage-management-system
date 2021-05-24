<!DOCTYPE html>
<html>
    <head>
        <title>User Complain</title>
        <style>
            .p{
                margin-left: 280px;
                border-radius: 30px;
            }
            ul {
                position: absolute;
                list-style-type: none;
                margin-left: 300px;
                padding: 0;
                overflow: hidden;
                background-color:darkseagreen;
                border-radius: 20px;
                width: 1015px;
            }
            li a {
                display: block;
                color: black;
                text-align: center;
                padding: 16px 18px;
                font-size: 25px;
                text-decoration: none;
            }
            li {
                float: left;
            }
            li a:hover {

                border-radius: 10px;
                color:white;
                background-color:lightgreen;
            }
            .p1{
                position: absolute;
                margin-left: -65%;
                margin-top: 8%;
                border-radius: 20px;
            }
            .p2{
                padding: 5px 50px;
                border-radius: 15px;
                font-size: 20px;
                height: 50px;
            }
            .p4{
                padding: 8px 30px;
                border-radius: 10px;
            }
            .table{
                position: absolute;
                margin-top: -50%;
                margin-left: 52%;
                height: 90%;
                border-radius: 10px;
            }
            table,tr,td{
                padding: 3px;
            }
            td{
                border-radius: 10px;
            }
            .width{
                padding: 5px 20px;
                width: 225px;
                border-radius: 5px;
            }
            .width1{
                padding: 5px 20px;
                width: 267px;
                border-radius: 5px;
            }
            tr{
               background-color:darkseagreen;
               font-size: 20px;
            }
            input{
                height: 30px;
            }
        </style>
    </head>
    <body style="background-color:rgba(0, 128, 0, 0.705)">
        <h1 align="center" style="color: white;">WASTE MANAGEMENT SYSTEM</h1>

        <ul>
            <li><a href="user.html">Home</a></li>
            <li><a href="send request.php">Send Request</a></li>
            <li><a href="view status.php">View Status</a></li>
            <li><a href="send complain.php">Send Complain</a></li>
            <li><a href="user complain.php">View Complain</a></li>
            <li><a href="index.html">Log Out</a></li>
        </ul>
        <img src="photo/p0.png" alt="" width="1050px" height="900px" class="p">
        <img src="photo/p6.png" alt="Error" width="500px" height="90%" class="p1">

        <form method="POST">
            <table border="1px" id="table1" class="table" >
                <tr>
                    <td colspan="2" align="center">
                    <h1>Send Complain</h1>
                    </td>
                </tr>
                <tr>
                    <td>Enter Flat No :</td>
                    <td>
                        <input type="text" placeholder="Enter Flat No" name="number" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required">
                    </td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td>
                        <textarea  placeholder="Enter Your Address" name="add" id="text" cols="35" rows="5" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Complain :</td>
                    <td>
                        <textarea  placeholder="Write Your Complain" name="com" id="text" cols="35" rows="5" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></textarea>
                    </td>
                </tr>
                <tr>
                <td>Enter E-mail Address : </td>
                    <td>
                        <input type="email" placeholder="Enter Email Address" name="email" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required">
                    </td>
                </tr>
                <tr>
                    <td>Enter Mobile No :</td>
                    <td><input type="number" placeholder="Enter Mobile No" name="p_no" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></td>
                </tr>
                <tr>
                <td>Enter Your City : </td>
                    <td>
                        <input type="text" placeholder="Enter your City" name="city" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required">
                    </td>
                </tr>
                <tr>
                    <td>Select Zone :</td>
                    <td>
                        <select name="zone" style="background-color:rgba(163, 250, 163, 0.884);" class="width1" required="required">
                            <option name="zone" value="-">Select Zone</option>
                            <option name="zone" value="East Zone"> East Zone </option>
                            <option name="zone" value="West Zone"> West Zone </option>
                            <option name="zone" value="Central Zone"> Central Zone </option>
                            <option name="zone" value="North Zone">North Zone</option>
                            <option name="zone" value="South Zone">South Zone</option>
                        </select>
                    </td>
                </tr>
                    <td>Enter User Name :</td>
                    <td><input type="text" placeholder="Enter User Name" name="u_id" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="100" align="right"><input type="submit" value="Submit" name="insert" class="p2" style="background-color:rgba(163, 250, 163, 0.884);"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    error_reporting(0);
    $con = mysqli_connect('localhost','root','','garbage_provider');

    if(isset($_POST['insert']))
    {
        $f_no = $_POST['number'];
        $address = $_POST['add'];
        $complain = $_POST['com'];
        $email = $_POST['email'];
        $phone_no = $_POST['p_no'];
        $city = $_POST['city'];
        $zone = $_POST['zone'];
        $user_id = $_POST['u_id'];


        $query = "INSERT INTO `complain`(`f_no`, `address`, `complain`, `email`, `phone_no`, `city`, `zone`, `user_id`) VALUES ('$f_no','$address','$complain','$email','$phone_no','$city','$zone','$user_id')";

        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            echo '<script type="text/javascript">alert("Your Complain Successfully Send")</script>';
        }
        else
        {
            echo '<script type="text/javascript">alert("Your Complain Failed")</script>';
        }
    }

?>