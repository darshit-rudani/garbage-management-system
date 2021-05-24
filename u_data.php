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
            .table{
                border: solid black;
                margin-left: 165px;
                margin-top: -2%;
                width: 80%;
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
                margin-left: -67%;
                margin-top: 4.9%;
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
        <img src="photo/p13.png" alt="" width="1000px" height="480px" class="p2">

            <table border="1px" class="table">
                <tr>
					<td class="p3"><b><h2>Id</h2></b></td>
                    <td class="p3"><b><h2>Name</h2></b></td>
                    <td class="p3"><b><h2>Mobile</h2></b></td>
					<td class="p3"><b><h2>Password</h2></b></td>
                    <td class="p3"><b><h2>Email Id</h2></b></td>
					<td class="p3"><b><h2>Action</h2></b></td>
                </tr><br><br><br><br>
                <tr></tr>

                <?php
                    $con = mysqli_connect('localhost','root','','garbage_provider');
                    if($con-> connect_errno){
                        die("connection failed:" . $con-> connect_error);
                    }
                    $query = "SELECT * FROM `registration`";
					$data = mysqli_query($con,$query);
					$total = mysqli_num_rows($data);

                    if($total!=0){
                        while($result=mysqli_fetch_assoc($data))
						{
                            echo "
								<tr>
									<td>". $result["id"] ."</td>
									<td>". $result["user_name"] ."</td>
									<td>". $result["mobile"] ."</td>
									<td>" .$result["password"] ."</td>
									<td>". $result["email"] ."</td>
									<td><a href='deleteregistration.php?re=$result[user_name]' onclick='return checkdelete()'>Delete</td>
								</tr>";
                        }
                        echo "</table>";
                    }
                    $con-> close();
                ?>
            </table>
            <h1 class="d">.</h1>
    </body>
</html>