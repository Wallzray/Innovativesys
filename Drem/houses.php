 <?php 
 session_start(); 
$con= new mysqli("localhost", "root","", "Digitalestate");
$houseno= $_SESSION['houses'];
$tenant=$con->query("SELECT * FROM tenants;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Houses</title>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian;">Your Real Estate in Your Hand!</i><br>
</div>
<div class="w3-bar" style="background-color:rgb(177, 3, 3); color:white;">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-blue"  style="width: 20%;">Dashboard</a>
        <a href="houses.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 20%;">Houses</a>
        <a href="manage.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 20%;">Managers</a>
        <a href="message.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 20%;">Messages</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>

<div class="w3-container" style="text-align: center; font-size: 20px; margin-bottom:5px;">
        Your Houses: <?php echo $houseno;?> 
        <a href="tenant.php#Add" class="w3-btn" style="background-color:blue; border-radius:10px ;margin-left:40%;">ADD TENANT</a>
</div>

<?php foreach($tenant as $rows){ $tid= $rows['Id']; ?>
<div style="width: 30%; margin-left: 5%; background-color: white; border-radius: 10px; border: rgb(177, 3, 3) solid 2px; box-shadow: 0 30px 30px 0 black solid; padding:5px 5px;">
    
<div style="display:flex; justify-content:space-between;">
    <div>
        <img src="assets/images/house1.png" height="100px" width="100px"> 
    </div>
    <div>
        <i>Tenant Name: </i><?php echo $rows['Tenantname'];?><br>
        <i>Tenant Contact: </i><?php echo $rows['Tenantcontact'];?><br>
        <i>Residents in House: </i><?php echo $rows['Residents'];?><br>
        <i>Rent Due: </i><?php echo $rows['Rentdue'];?><br>
        <i>Next Payment Due: </i><?php echo $rows['Nextpaymentdate'];?><br>
        <i>Location: </i><?php echo $rows['Houselocation'];?><br>
    </div>
</div> 
     <a href="update.php?update_tenant=<?php echo $tid; ?>" class="w3-btn" style="background-color: blue; border-radius: 10px;">EDIT</a>
</div>
<?php }?>