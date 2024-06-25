<?php
session_start(); 
$clientnin= $_SESSION['nin'];
$conn= new mysqli("localhost", "root","", "CHInsurance");

$contribdet= $conn->query("SELECT * FROM contributions WHERE Clientnin LIKE '%$clientnin%'");
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
        <a href="portal.php">Profile</a>
        <a href="contribution.php" class="active">Contributions</a>
        <a href="statement.php">Statements</a>
    </div>
    <div class="main">
         <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"></a>
        <a href="packages.php">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php" class="active">My Portal</a>
    </div>
    <h4>MAKE CONTRIBUTION</h4>

        <form action="contribute.php" method="post">
            <label>NIN</label><br>
            <input style="margin-bottom: 5px;" type="text" name="clientnin" value='<?php echo $clientnin;?>' disabled><br>
            <label>Contribution</label><br>
            <input style="margin-bottom: 5px;" type="number" name="contribution" placeholder="UGX"><br>
            <label>Contribution Type</label><br>
            <input style="margin-bottom: 5px;" type="text" name="ctype" value="CONTRIBUTION" disabled><br>
            <button type="submit" class="w3-btn" style="background-color: rgb(94, 2, 2);  border-radius: 20px; color: white;">ADD</button>
        </form>
                      
    <h4>YOUR CONTRIBUTION DETAILS</h4>
    <table class="table table-striped">
        <thead>
            <th>Date</th>
            <th>Contribution type</th>
            <th>Member Contribution</th>
            <th>Total Contribution</th>
        </thead>
        <?php
        while($prow= mysqli_fetch_row($contribdet)){?>
        <tr>
           <td><?php echo $prow[1];?></td> 
           <td><?php echo $prow[2];?></td> 
           <td><?php echo $prow[3];?></td> 
           <td><?php echo $prow[4];?></td> 
        </tr>
        <?php };?>
    </table>
    
    </div>
   
</body>
</html>