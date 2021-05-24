<!DOCTYPE html>
<html>
    <head>
        <title>User Complain</title>
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
            .table{
                border: solid black;
                margin-left: 1px;
                margin-top: -2%;
                width: 100%;
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
            .p1{
                position: absolute;
                margin-left: 43%;
            }
            .p2{
                position: absolute;
                margin-left: -70%;
                margin-top: 7%;
                border-radius: 15px;
            }
            .p3{
                color:darkred;
                background-color: khaki;
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
        <li><a href="admin.php" class="l1">Home</a></li>
            <li><a href="user request.php" class="l2">User Request</a></li>
            <li><a href="u_data.php" class="l3">User List</a></li>
            <li><a href="view complain.php" class="l3">User Complain</a></li>
            <li><a href="collector.php">Garbage Collector</a></li>
            <li><a href="index.html">Log Out</a></li>
        </ul>

        <img src="photo/p0.png" alt="" width="1200px" height="600px" class="p">
        <img src="photo/p10.png" alt="" width="1000px" height="400px" class="p2"><br><br><br>

            <table border="1px" class="table">
                <tr>
                    <td class="p3"><b><h2>ID</h2></b></td>
                    <td class="p3"><b><h2>No</h2></b></td>
                    <td class="p3"><b><h2>Address</h2></b></td>
                    <td class="p3"><b><h2>Email</h2></b></td>
                    <td class="p3"><b><h2>Phone No</h2></b></td>
                    <td class="p3"><b><h2>City</h2></b></td>
                    <td class="p3"><b><h2>Zone</h2></b></td>
                    <td class="p3"><b><h2>User Id</h2></b></td>
                    <td class="p3"><b><h2>Status</h2></b></td>
                </tr><br><br><br><br>
                <tr></tr>

                <?php
                    error_reporting(0);
                    $con = mysqli_connect('localhost','root','','garbage_provider');
                    $query = "SELECT * FROM `complain`";
					$data = mysqli_query($con,$query);
					$total = mysqli_num_rows($data);

                    if($total!=0){
                        while($result=mysqli_fetch_assoc($data)){
                            echo "
								<tr>
									<td>". $result["id"] ."</td>
									<td>". $result["f_no"] ."</td>
									<td>". $result["address"] ."</td>
									<td>". $result["email"] ."</td>
									<td>". $result["phone_no"] ."</td>
									<td>". $result["city"] ."</td>
									<td>". $result["zone"] ."</td>
									<td>". $result["user_id"] ."</td>
									<td><a href='update complain.php?de=$result[f_no]'>". $result["Status"] ."</td>
								</tr>";
                        }
                        echo "</table>";
                    }
                ?>
            </table>
            <h1 class="d">.</h1>
    </body>
</html>