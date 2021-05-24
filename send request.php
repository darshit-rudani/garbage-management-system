<!DOCTYPE html>
<html>
    <head>
        <title>User Request</title>
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
            }
            .p4{
                padding: 8px 30px;
                border-radius: 10px;
            }
            .table{
                position: absolute;
                margin-top: -50%;
                margin-left: 52%;
                height: 60%;
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
                    <h1>Send Request</h1>
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
                <td>Enter E-mail Address : </td>
                    <td>
                        <input type="email" placeholder="Enter Email Address" name="email" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required">
                    </td>
                </tr>
                <tr>
                    <td>Select Gender : </td>
                    <td>
                        <input type="radio" name="gender" value="MALE">Male
                        <input type="radio" name="gender" value="FEMALE">Female
                        <input type="radio" name="gender" value="OTHERS">Others
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
                <tr>
                    <td>Select Types Of Waste :</td>
                    <td>
                        <select name="waste" style="background-color:rgba(163, 250, 163, 0.884);" class="width1" required="required">
                            <option name="waste" value="-">Select Waste</option>
                            <option name="waste" value="Agricultural"> Agricultural</option>
                            <option name="waste" value="Commercial">Commercial</option>
                            <option name="waste" value="Industrial">Industrial</option>
                            <option name="waste" value="Medical-Waste">Medical-Waste</option>
                            <option name="waste" value="E-Waste">E-Waste</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Enter Approx Weight :</td>
                    <td><input type="text" placeholder="Enter Approx Weight" name="weight" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></td>
                </tr>
                <tr>
                    <td>Enter User Name :</td>
                    <td><input type="text" placeholder="Enter User Name" name="u_id" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></td>
                </tr>
                <tr>
                    <td>Payment Method :</td>
                    <td>
                        <select name="payment" style="background-color:rgba(163, 250, 163, 0.884);" class="width1" required="required">
                            <option name="payment" value="-">Select Payment</option>
                            <option name="payment" value="Google Pay"> Google Pay </option>
                            <option name="payment" value="Paytm"> Paytm </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mobile no For Payment :</td>
                    <td><input type="number" placeholder="Enter Mobile no For Payment" name="m_no" class="width" style="background-color:rgba(163, 250, 163, 0.884);" required="required"></td>
                </tr>
                <tr>
                    <td>Select Amount :</td>
                    <td>
                        <select name="amount" style="background-color:rgba(163, 250, 163, 0.884);" class="width1" required="required">
                            <option name="amount" value="-">Select Amount</option>
                            <option name="amount" value="500 gm = Rs.50">500 gm = Rs.50</option>
                            <option name="amount" value="1 kg = Rs.100">1 kg = Rs.100</option>
                            <option name="amount" value="2 kg = Rs.150">2 kg = Rs.150</option>
                            <option name="amount" value="3 kg = Rs.200">3 kg = Rs.200</option>
                            <option name="amount" value="4 kg = Rs.250">4 kg = Rs.250</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" value="Submit" name="insert" class="p2" style="background-color:rgba(163, 250, 163, 0.884);"></td>
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
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone_no = $_POST['p_no'];
        $city = $_POST['city'];
        $zone = $_POST['zone'];
        $waste = $_POST['waste'];
        $weight = $_POST['weight'];
        $user_id = $_POST['u_id'];
        $payment = $_POST['payment'];
        $m_no = $_POST['m_no'];
        $amount = $_POST['amount'];


        $query = "INSERT INTO `request`(`f_no`, `address`, `email`, `gender`, `phone_no`, `city`, `zone`, `waste`, `weight`, `user_id`,`payment`,`m_no`,`amount`) VALUES ('$f_no','$address','$email','$gender','$phone_no','$city','$zone','$waste','$weight','$user_id','$payment','$m_no','$amount')";

        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            echo '<script type="text/javascript">alert("Your Request & Payment Successfully Send")</script>';
        }
        else
        {
            echo '<script type="text/javascript">alert("Your Request Failed")</script>';
        }
    }

?>