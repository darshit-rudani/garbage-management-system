<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <style>
            .p{
                margin-left: 240px;
                border-radius: 30px;
            }
            ul {
                position: absolute;
                list-style-type: none;
                margin-left: 260px;
                padding: 0;
                overflow: hidden;
                background-color:darkseagreen;
                border-radius: 20px;
                width: 1050px;
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
                margin-left: -62%;
                margin-top: 7%;
            }
            .p2{
                position: absolute;
                margin-left: 53%;
                margin-top: -23%;
            }
            .p3{
                position: absolute;
                font-size: 20px;
                margin-left: 60%;
                margin-top: -25%;
                height: 40%;
            }
            .p4{
                position: absolute;
                margin-left: 150px;
                margin-top: 20px;
                padding: 8px 30px;
                border-radius: 10px;

            }
            .p5{
                margin-top: -20px;
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
        <img src="photo/p0.png" alt="" width="1100px" class="p">
        <img src="photo/p9.png" alt="Error" width="900px" height="450px" class="p1">
    </body>
</html>