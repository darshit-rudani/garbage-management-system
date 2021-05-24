<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
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
                margin-left: 170px;
                margin-top: 20px;
                padding: 8px 30px;
                border-radius: 10px;

            }
            .table{
                position: absolute;
                font-size: 20px;
                margin-left: 60%;
                margin-top: -25%;
                height: 40%;
                width: 300px;
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
            <li><a href="index.html" class="l1">Home</a></li>
            <li><a href="admin login.php" class="l2">Admin</a></li>
            <li><a href="registration.php" class="l3">User Registration</a></li>
         </ul>
        <img src="photo/p0.png" alt="" width="1000px" class="p">
        <img src="photo/p8.png" alt="Error" width="600px" height="450px" class="p1">

        <form method="post">
            <table class="table" border="1px">
                <tr>
                    <td>
                        <h1 align="center" class="p2"><u>Login</u></h1><br>
                        <label>User - Id :</label>
                        <input type="text" placeholder="Enter User Name" name="name" required="required" style="margin-left: 3px;"><br><br>
                        <label>Password : </label>
                        <input type="password" placeholder="Enter Password" name="password" required="required"><br>
                        <button type="submit" name="submit" value="Submit" class="p3">Login</button><br>
                    </td>
                </tr>
                <?php
                    error_reporting(0);
                    $con = mysqli_connect('localhost','root','');

                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['name'];
                        $password=$_POST['password'];
                        if($name=='Admin' && $password=='Admin')
                        {
                            echo '<script type="text/javascript">alert("Login Successfully ")</script>';
                            ?>
                            <META HTTP-EQUIV="Refresh" CONTENT ="0;
                            URL=http://localhost/hackathon/admin.php">
                            <?php
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("You Can Not Login Because You Are Not Admin")</script>';
                        }
                    }
                ?>
            </table>
        </form>
    </body>
</html>


