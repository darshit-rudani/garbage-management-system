<!DOCTYPE html>
<html>
    <head>
        <title>Garbage Collector</title>
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
                border-color: black;
                margin-left: 170px;
                border-radius: 10px;
                width: 200px;
                height: 50px;
                font-size: 20px;
            }
            .p3{
                border-radius: 10px;
                margin-left: 10px;
                height: 50px;
                width: 100px;
                font-size: 20px;
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
            <li><a href="admin.php">Home</a></li>
        </ul>

        <img src="photo/p0.png" alt="" width="1200px" height="90px" class="p"><br><br><br><br><br>

		<form method="POST">
            <select name="zone" required="required" class="p2">
                <option name="zone" value="-">Select Zone</option>
                <option name="zone" value="East Zone"> East Zone </option>
                <option name="zone" value="West Zone"> West Zone </option>
                <option name="zone" value="Central Zone"> Central Zone </option>
                <option name="zone" value="North Zone">North Zone</option>
                <option name="zone" value="South Zone">South Zone</option>
            </select>
                <input type="submit" name="submit" value="Submit" class="p3">
		    </form>

            <table border="1px" class="table">
                <tr>
                    <td class="p4"><b><h2>Flat No</h2></b></td>
                    <td class="p4"><b><h2>Address</h2></b></td>
                    <td class="p4"><b><h2>Phone No</h2></b></td>
                    <td class="p4"><b><h2>City</h2></b></td>
                    <td class="p4"><b><h2>Waste</h2></b></td>
                    <td class="p4"><b><h2>Weight</h2></b></td>
                    <td class="p4"><b><h2>Status</h2></b></td>
                </tr><br><br><br><br>
                <tr></tr>

                <?php
                    error_reporting(0);
                    $con = mysqli_connect('localhost','root','','garbage_provider');
                    if(isset($_POST['submit']))
                    {
                        $zone = $_POST['zone'];

                        $query = "SELECT * FROM `request` WHERE zone='$zone' ";
                        $data = mysqli_query($con,$query);
                        $total = mysqli_num_rows($data);

                        if($total!=0){
                            while($result=mysqli_fetch_assoc($data))
                            {
                                echo "
                                <tr>
                                    <td>". $result["f_no"] ."</td>
                                    <td>". $result["address"] ."</td>
                                    <td>". $result["phone_no"] ."</td>
                                    <td>". $result["city"] ."</td>
                                    <td>". $result["waste"] ."</td>
                                    <td>". $result["weight"] ."</td>
									<td><a href='update.php?de=$result[f_no]'>". $result["status"] ."</td>
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