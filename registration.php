<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
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
                border-radius: 50px;
            }
            .p2{
                position: absolute;
                margin-left: 55%;
                margin-top: 10px;
                padding: 8px 30px;
                border-radius: 10px;
            }
            .p3{
                margin-top: -20px;
            }
            .table{
                position: absolute;
                font-size: 20px;
                margin-left: 55%;
                margin-top: -30%;
                height: 60%;
				width: 20%;
            }
            label{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            input{
                border-color: black;
                border-radius: 5px;
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
        <img src="photo/p2.png" alt="Error" width="500px" height="500px" class="p1">

        <form method="POST">
            <table class="table" border="1px">
                <tr>
                    <td>
                        <h1 align="center" class="p3"><u>Registration</u></h1><br>
						<label>User Name :</label>
                        <input type="text" placeholder="Enter User Name" name="name" required="required" style="margin-left: 16px;"><br><br>
                        <label>PhoneNo :</label>
                        <input type="number" placeholder="Enter PhoneNo" name="no" required="required" style="margin-left: 32px;"><br><br>
                        <label>Password : </label>
                        <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required" style="margin-left: 34px;"><br><br>
                        <label>Email-Id : </label>
                        <input type="email" placeholder="Enter Email-Id" name="email" style="margin-left: 45px;"><br><br>
                        <button type="submit" value="Submit" name="insert" class="p2">Submit</button>
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
                            echo '<script type="text/javascript">alert("You Have Already Registered")</script>';
                        }
                        else
                        {
                            $name = $_POST['name'];
                            $mobile = $_POST['no'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];

                            $query = "INSERT INTO `registration`(`user_name`, `mobile`, `password`, `email`) VALUES ('$name','$mobile','$password','$email')";
                            $query_run = mysqli_query($con,$query);

                            if($query_run)
                            {
                                echo '<script type="text/javascript">alert("Registration Successfully ")</script>';
                                ?>
                                <META HTTP-EQUIV="Refresh" CONTENT ="0;
                                URL=http://localhost/hackathon/login.php">
                                <?php
                            }
                        }
                    }

                ?>
            </table>
        </form>
    </body>
</html>


