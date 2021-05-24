<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                width: 950px;
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
                margin-left: -61%;
                margin-top: 5%;
            }
            .p2{
                margin-top: -20px;
            }
            .p3{
                position: absolute;
                margin-left: 180px;
                margin-top: 10px;
                padding: 8px 30px;
                border-radius: 10px;

            }
            .table{
                position: absolute;
                font-size: 20px;
                margin-left: 60%;
                margin-top: -25%;
                height: 45%;
                width: 300px;
            }
            label{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            input{
                border-radius: 5px;
                border-color: black;
                height: 20px;
            }
        </style>
    </head>
    <body style="background-color:rgba(0, 128, 0, 0.705)">
        <h1 align="center" style="color: white;">WASTE MANAGEMENT SYSTEM</h1>

        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="admin login.php">Admin</a></li>
			<li><a href="registration.php">User Registration</a></li>
			<li><a href="login.php">User Login</a></li>
         </ul>
        <img src="photo/p0.png" alt="" width="1000px" class="p">
        <img src="photo/p3.png" alt="Error" width="600px" height="450px" class="p1">

        <form method="POST">
            <table class="table" border="1px">
                <tr>
                    <td>
                        <h1 align="center" class="p2"><u>Login</u></h1><br>
                        <label>User Name :</label>
                        <input type="text" placeholder="Enter User Name" name="name" required="required"><br><br>
                        <label>PhoneNo :</label>
                        <input type="number" placeholder="Enter PhoneNo" name="no" required="required" style="margin-left: 18px;"><br><br>
                        <label>Password : </label>
                        <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required" style="margin-left: 20px;"><br>
                        <button type="submit" name="insert" value="Submit" class="p3">Login</button><br>
                    </td>
                </tr>

                <?php
                    error_reporting(0);

                    $con = mysqli_connect('localhost','root','','garbage_provider');

                    if(isset($_POST['insert']))
                    {
                        $name = $_POST['name'];

                        $query = "SELECT `user_name` FROM `registration` WHERE user_name='$name' ";
                        $data = mysqli_query($con,$query);

                        if(mysqli_num_rows($data))
                        {
                            echo '<script type="text/javascript">alert("Login Successfully ")</script>';
                            ?>
                            <META HTTP-EQUIV="Refresh" CONTENT ="0;
                            URL=http://localhost/hackathon/user.html">
                            <?php
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Please First Confirm Registration")</script>';
                        }
                    }

                ?>
            </table>
        </form>
    </body>
</html>
