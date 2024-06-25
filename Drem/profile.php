<?php 
 session_start(); 
$con= new mysqli("localhost", "root","", "Digitalestate");

$ownername= $_SESSION['owner'];
$profile=$con->query("SELECT DISTINCT * FROM users WHERE Ownername like '%$ownername%'LIMIT 1;");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Profile</title>

<style>
        body{
            background-image: url('assets/images/apartment.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
        img{
            height: 25px;
            width: 25px;
        }
        tr{
            font-size: 17px;
            padding-top:5px;
            padding-bottom:5px;
        }
        td{
            width: 40%;
        }
        table{
            margin-top: 5px;
        }
</style>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian; color:white;">Your Real Estate in Your Hand!</i><br>
</div>
<div class="w3-bar" style="background-color:rgb(177, 3, 3); color:white;">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-blue"  style="width: 26%;">Dashboard</a>
        <a href="houses.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Houses</a>
        <a href="manage.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 26%;">Managers</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>

<div class="w3-white" style="margin:5px 5%;">
Hello, <?php echo $ownername;?>
    <table class="table w3-striped">
        <th>YOUR ACCOUNT DETAILS</th>
        <th></th>
            
        <?php foreach($profile as $pf){ ?>
        <tr class="w3-light-grey">
            <td>First Name</td>
            <td><?php echo $pf['Firstname'];?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $pf['Lastname'];?></td>
        </tr>
        <tr>
            <td>Your Username</td>
            <td><?php echo $pf['Ownername'];?></td>
        </tr>
        <tr>
            <td>Your Password</td>
            <td><?php echo $pf['Userpassword'];?></td>
        </tr>
        <tr>
            <td>Number of Houses</td>
            <td><?php echo $pf['Houseno'];?></td>
        </tr>
    <?php }?>
    </table>
    <a href="update.php?update_profile=<?php echo $pf['Id']; ?>" class="w3-btn" style="background-color: rgb(94, 2, 2);  border-radius: 20px; color: white;">Update Details</a>
    </div>
   
</body>
</html>