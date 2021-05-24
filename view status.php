<!DOCTYPE html>
<html>
    <head>
        <title>User Status</title>
        <style>
            ul {
                position: absolute;
                list-style-type: none;
                margin-left: 220px;
                padding: 0;
                background-color:darkseagreen;
                border-radius: 20px;
                width: 1170px;
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
            .p{
                border: solid black;
                margin-left: 200px;
                border-radius: 30px;
            }
            .p1{
                margin-left: 180px;
                font-size: 25px;
            }
            .p2{
                border-radius: 10px;
                width: 200px;
                height: 50px;
            }
            .p3{
                border-radius: 10px;
                margin-left: 400px;
                height: 30px;
                width: 80px;
            }
            .p4{
                color:darkred;
                background-color: khaki;
            }
            .table{
                border: solid black;
                margin-left: 165px;
                width: 81%;
                height: 15%;
                border-radius: 10px;
                background-color: white;
            }
            td{
                border-radius: 5px;
                padding: 5px 5px;
                background-color:lemonchiffon;
                font-size: 17px;
            }
            .d{
                margin-top: 40%;
                margin-left: -10%;
                color: rgba(0, 128, 0, 0.705);
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

        <img src="photo/p0.png" alt="" width="1200px" height="90px" class="p"><br><br><br><br><br>

		<form method="POST">
                <label class="p1"><b>Enter Your User Id :</b></label>
                <input type="text" name="name" placeholder=" Enter Your User Id" class="p2"><br><br>
                <input type="submit" name="submit" value="Submit" class="p3">
		</form>

            <table border="1px" class="table">
                <tr>
                    <td class="p4"><b><h2>House No</h2></b></td>
                    <td class="p4"><b><h2>Address</h2></b></td>
                    <td class="p4"><b><h2>Email</h2></b></td>
                    <td class="p4"><b><h2>Gender</h2></b></td>
                    <td class="p4"><b><h2>Phone No</h2></b></td>
                    <td class="p4"><b><h2>City</h2></b></td>
                    <td class="p4"><b><h2>Zone</h2></b></td>
                    <td class="p4"><b><h2>Waste</h2></b></td>
                    <td class="p4"><b><h2>Weight</h2></b></td>
                    <td class="p4"><b><h2>User Id</h2></b></td>
                    <td class="p4"><b><h2>Payment Method</h2></b></td>
                    <td class="p4"><b><h2>Amount</h2></b></td>
                    <td class="p4"><b><h2>Status</h2></b></td>
                </tr><br><br><br><br>
                <tr></tr>

                <?php
                    error_reporting(0);
                    $con = mysqli_connect('localhost','root','','garbage_provider');
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];

                        $query = "SELECT * FROM `request` WHERE user_id='$name' ";
                        $data = mysqli_query($con,$query);
                        $total = mysqli_num_rows($data);

                        if($total!=0){
                            while($result=mysqli_fetch_assoc($data))
                            {
                                echo "
                                <tr>
                                <td>". $result["f_no"] ."</td>
                                <td>". $result["address"] ."</td>
                                <td>". $result["email"] ."</td>
                                <td>". $result["gender"] ."</td>
                                <td>". $result["phone_no"] ."</td>
                                <td>". $result["city"] ."</td>
                                <td>". $result["zone"] ."</td>
                                <td>". $result["waste"] ."</td>
                                <td>". $result["weight"] ."</td>
                                <td>". $result["user_id"] ."</td>
                                <td>". $result["payment"] ."</td>
                                <td>". $result["amount"] ."</td>
                                <td>". $result["status"] ."</td>
                            </tr>";
                            }
                            echo "</table>";
                        }
                        $con-> close();
                    }
                ?>
            </table>
            <h1 class="d">.</h1>
    </body>
</html>