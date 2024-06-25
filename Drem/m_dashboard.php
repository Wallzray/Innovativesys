<?php 
$con= new mysqli("localhost", "root","", "Digitalestate");
session_start();
$manager= $_SESSION['manager'];
 $tenant=$con->query("SELECT * FROM tenants");
 $tenantno=mysqli_num_rows($tenant);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    * {box-sizing: border-box}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  float: left;
  padding: 0px 12px;
  /* border: 1px solid #ccc; */
  width: 70%;
  border-left: none;
  height: 300px;
}
th, td{
    min-width: 150px;
}
</style>

    <title>DREM: Tenants</title>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian; color:white;">Your Real Estate in Your Hand!</i><br>
</div>
<div class="w3-bar" style="background-color:rgb(177, 3, 3); color:white;">
        <a href="m_dashboard.php" class="w3-bar-item w3-button w3-hover-blue"  style="width: 26%;">Dashboard</a>
        <a href="m_profile.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Profile</a>
        <a href="m_message.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 26%;">Messages</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>

<div class="w3-container" style="text-align: center; font-size: 20px; margin-bottom:5px; color:white;">
    Tenants:
</div>

<div id="View" class="tabcontent w3-table w3-striped w3-white">
        <table>
            <tr>
                <th>No.</th>
                <th>Tenant Name</th>
                <th>Tenant Contact</th>
                <th>House residents</th>
                <th>Rent</th>
                <th>Rent Due</th>
                <th>Next Payment</th>
                <th>Next of Kin</th>
                <th>Action</th>
            </tr>
            <tbody>
            <?php
                $tenantquery= $con->query("SELECT * from tenants where Manager like '%$manager%'");
                $tenantnum= mysqli_num_rows($tenantquery);
                for($a=1; $a<= $tenantnum; $a++){ 
                $row= mysqli_fetch_row($tenantquery);
                $no= $row[0];
                $tenantname= $row[1];
                $contact= $row[2];
                $residents= $row[3];
                $rent= $row[4];
                $rentdue= $row[5];
                $nextpaydate= $row[6];
                $trusteeno= $row[9];
                ?>
                    
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tenantname ?></td>
                    <td><?php echo $contact; ?></td>
                    <td><?php echo $residents; ?></td>
                    <td><?php echo $rent; ?></td>
                    <td><?php echo $rentdue; ?></td>
                    <td><?php echo $nextpaydate; ?></td>
                    <td><?php echo $trusteeno; ?></td>
                    <td>
                    <a style='margin: 5px;' href="update.php?update_tenant_m=<?php echo $no; ?>">                 
                    <img src="assets/icons/pencil-fill.svg">
                    </a>
                    </td>
                </tr>
               <?php } ?>
            
            </tbody>
        </table>
    </div>
</body>
</html>