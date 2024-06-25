<?php
session_start(); 
$clientnin= $_SESSION['nin'];
$conn= new mysqli("localhost", "root","", "CHInsurance");
$customerdet= $conn->query("SELECT * FROM users WHERE Clientnin LIKE '%$clientnin%'");
while($row= mysqli_fetch_row($customerdet)){
    $clientname= $row[2];
    $clientemail= $row[3];
    $clientphone= $row[4];
}
$policydet= $conn->query("SELECT * FROM insurance WHERE Clientnin LIKE '%$clientnin%'");
while($prow= mysqli_fetch_row($policydet)){
    $policyno= $prow[0];
    $joindate= $prow[3];
    $type= $prow[4];
    $package= $prow[5];
    $beneficiary= $prow[7];
    $trusteename= $prow[8];
    $trusteeno= $prow[9];
}
    if($type="LIFE"){
        $scheme= "LIFE INSURANCE PLAN";
    }
    elseif($type="HEALTH"){
        $scheme= "HEALTH INSURANCE PLAN";
    }
    elseif ($type= "ACCIDENT") {
        $scheme= "ACCIDENT INSURANCE PLAN";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Dashboard</title>

</head>
<body>
   
    <div class="sidenav">
        <a href="portal.php" class="active">Profile</a>
        <a href="contribution.php">Contributions</a>
        <a href="statement.php">Statements</a>
    </div>
    <div class="main">
    <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php" class="active">My Portal</a>
    </div>
    Hello, <?php echo $clientname;?>
    <table class="table table-striped">
        <th>
            <td>YOUR ACCOUNT DETAILS</td>
            <td></td>
        </th>
        <tr>
            <td>Scheme Name</td>
            <td><?php echo $scheme;?></td>
        </tr>
        <tr>
            <td>Policy Number</td>
            <td><?php echo $policyno;?></td>
        </tr>
        <tr>
            <td>Member Name</td>
            <td><?php echo $clientname;?></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><?php echo $clientemail;?></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><?php echo $clientphone;?></td>
        </tr>
        <tr>
            <td>Joining Date</td>
            <td><?php echo $joindate;?></td>
        </tr>
        <tr>
            <td>Your NIN</td>
            <td><?php echo $clientnin;?></td>
        </tr>
        <tr>
            <td>Package</td>
            <td><?php echo $package;?></td>
        </tr>
        <tr>
            <td>Next of Kin Name</td>
            <td><?php echo $trusteename;?></td>
        </tr>
        <tr>
            <td>Next of Kin Number</td>
            <td><?php echo $trusteeno;?></td>
        </tr>
        <tr>
            <td>Beneficiary</td>
            <td><?php echo $beneficiary;?></td>
        </tr>
    </table>
    <button type="submit" class="w3-btn" style="background-color: rgb(94, 2, 2);  border-radius: 20px; color: white;">Update Details</button>
    </div>
   
</body>
</html>