<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Updates</title>
<style>
    form{
        width: 70%;
        border: 2px solid blue;
        text-align: center;
        margin-left: 15%;
    }
    input{
        padding: 10px 0px;
        width: 30%;
        margin-bottom: 10px;
    }
</style>
</head>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian; color:white;">Your Real Estate in Your Hand!</i><br>
</div>


<?php
$con = mysqli_connect("localhost", "root", "", "Digitalestate");

if (isset($_GET['update_tenant'])) {
    $id = $_GET['update_tenant'];
    $query1 = $con->query("SELECT * FROM tenants WHERE Id='$id'");
    if(!$query1){
        echo "Error:".$con->error;
    }else{
    while ($row = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='post'>
         <h3>Update Form</h3>
         <hr/>
         <label>Tenant name:</label><br />
         <input type='text' name='tenantname' value='{$row[1]}'/><br/>
         <label>Tenant contact:</label><br />
         <input type='text' name='contact' value='{$row[2]}'/><br/>
         <label>Next of Kin contact:</label><br />
         <input type='number' name='trusteecontact' value='{$row[9]}'/><br/>
         <label>Residents number:</label><br />
         <input type='number' name='residents' value='{$row[3]}'/><br/>
         <label>Rent Payable</label><br />
         <input type='text' name='rentfees' value='{$row[4]}'/><br/>
         <label>Rent Due</label><br />
         <input type='text' name='rentdue' value='{$row[5]}'/><br/>
         <label>Next Payment Date</label><br />
         <input type='text' name='nextpayment' value='{$row[6]}'/><br/>
         <input type='submit' name='tensubmit' value='Update'/>
         </form>";
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['tensubmit'])) {
    
    $tenantname = $_POST['tenantname'];
    $contact= $_POST['contact'];
    $trusteecontact= $_POST['trusteecontact'];
    $residents= $_POST['residents'];
    $rentfees= $_POST['rentfees'];
    $rentdue= $_POST['rentdue'];
    $nextpayment= $_POST['nextpayment'];
    
    $stmt = $con->query("UPDATE tenants SET Tenantname='$tenantname', Tenantcontact='$contact', Residents=$residents,Rentfees=$rentfees,Rentdue=$rentdue,Nextpaymentdate='$nextpayment' WHERE Id='$id';");
    
    if ($stmt) {
        echo "<script>alert('Updated Successfully'); window.location.href='tenant.php';</script>";
    }

}
}


if (isset($_GET['update_tenant_m'])) {
    $id = $_GET['update_tenant_m'];
    $query1 = $con->query("SELECT * FROM tenants WHERE Id='$id'");
    if(!$query1){
        echo "Error:".$con->error;
    }else{
    while ($row = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='post'>
         <h3>Update Form</h3>
         <hr/>
         <label>Tenant name:</label><br />
         <input type='text' name='tenantname' value='{$row[1]}'/><br/>
         <label>Tenant contact:</label><br />
         <input type='text' name='contact' value='{$row[2]}'/><br/>
         <label>Residents number:</label><br />
         <input type='number' name='residents' value='{$row[3]}'/><br/>
         <label>Rent Payable</label><br />
         <input type='text' name='rentfees' value='{$row[4]}'/><br/>
         <label>Rent Due</label><br />
         <input type='text' name='rentdue' value='{$row[5]}'/><br/>
         <label>Next Payment Date</label><br />
         <input type='text' name='nextpayment' value='{$row[6]}'/><br/>
         <input type='submit' name='tenupdate' value='Update'/>
         </form>";
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['tenupdate'])) {
    
    $tenantname = $_POST['tenantname'];
    $contact= $_POST['contact'];
    
    $residents= $_POST['residents'];
    $rentfees= $_POST['rentfees'];
    $rentdue= $_POST['rentdue'];
    $nextpayment= $_POST['nextpayment'];
    
    $stmt = $con->query("UPDATE tenants SET Tenantname='$tenantname', Tenantcontact='$contact', Residents=$residents,Rentfees=$rentfees,Rentdue=$rentdue,Nextpaymentdate='$nextpayment' WHERE Id='$id';");
    
    if ($stmt) {
        echo "<script>alert('Updated Successfully'); window.location.href='m_dashboard.php';</script>";
    }

}
}


if(isset($_GET['update_profile'])) {
    $update = $_GET['update_profile'];
    $query1 = $con->query("SELECT * FROM users WHERE Id='$update'");
    if(!$query1){
        echo "Err:".$con->error;
    }else{
    while ($row1 = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='post'>
        <h2>Owner's Update Form</h2>
        <label>Username</label><br>
        <input type='text' name='username' style='border-radius: 20px;'><br>
        <label>Password</label><br>
        <input type='text' name='password' style='border-radius: 20px;'><br>
        <label>Number of Houses</label><br>
        <input type='number' name='houseno' style='border-radius: 20px;'><br>
        <input type='submit' name='submit' value='Update'/>'
        </form>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password= ($_POST['password']);
    $houses= ($_POST['houseno']);
    
    $stmt = $con->query("UPDATE users SET Userpassword='$password', Ownername='$username',Houseno= '$houses' WHERE Id='$update';");
    
    if ($stmt) {
        echo "<script>alert('Updated Successfully'); window.location.href='profile.php';</script>";
    }


}
}


if(isset($_GET['m_update_profile'])) {
    $update = $_GET['m_update_profile'];
    $query1 = $con->query("SELECT * FROM users WHERE Id='$update'");
    if(!$query1){
        echo "Err:".$con->error;
    }else{
    while ($row1 = mysqli_fetch_array($query1)) {
        echo "<form class='form' method='post'>
        <h2>Manager's Update Form</h2>
        <label>Username</label><br>
        <input type='text' name='username' style='border-radius: 20px;'><br>
        <label>Password</label><br>
        <input type='text' name='password' style='border-radius: 20px;'><br>
        <input type='submit' name='msubmit' value='Update'/>'
        </form>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password= ($_POST['password']);
    
    $stmt = $con->query("UPDATE users SET Userpassword='$password', Managername='$username' WHERE Id='$update';");
    
    if ($stmt) {
        echo "<script>alert('Updated Successfully'); window.location.href='m_profile.php';</script>";
    }


}
}


if (isset($_GET['delete_tenant'])) {
    $deleted = $_GET['delete_tenant'];
    $query = $con->query("DELETE FROM tenants WHERE Id=$deleted");
    if(!$query){
        echo "Err:".$con->error;
    }
    else{
        echo "<script>alert('Deleted Successfully'); window.location.href='tenant.php';</script>";
    }  
}


if (isset($_GET['delete_manager'])) {
    $deleted = $_GET['delete_manager'];
    $query = $con->query("DELETE FROM users WHERE Id=$deleted");
    if(!$query){
        echo "Err:".$con->error;
    }
    else{
        echo "<script>alert('Deleted Successfully'); window.location.href='manage.php';</script>";
    }  
}

?>
</html>