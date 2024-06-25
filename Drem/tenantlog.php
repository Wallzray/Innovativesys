<?php
$con= new mysqli("localhost", "root","", "Digitalestate");

$tenant= $_POST['tenantname'];
$contact= $_POST['contact'];
$residents= $_POST['residents'];
$rent= $_POST['rentfees'];
$nextpayment= $_POST['nextpayment'];
$location= $_POST['location'];
$trusteecontact= $_POST['nokin'];

$sql= $con->query("SELECT * FROM users where Houselocation like '%$location%' ");
foreach($sql as $row){
    $houseno= $row['Houseno'];
    $manager= $row['Managername'];
}
$sql1= $con->query("SELECT * FROM users where Houselocation like '%$location%' ");
$no= mysqli_num_rows($sql1);
if($no < $houseno){
    $tenantsql= $con->query("INSERT INTO tenants(Tenantname,Tenantcontact,Residents,Rentfees,Nextpaymentdate,Manager,Houselocation,Trusteecontact) values('$tenant','$contact',$residents,$rent,'$nextpayment','$manager','$location','$trusteecontact')");
    if($tenantsql==TRUE){
        echo "<script>alert('$tenant Saved Successfully'); window.location.href='tenant.php';</script>";
    }
}
elseif($no ==$houseno ){
    echo "<script>alert('Your houses in $location are fully occupied'); window.location.href='tenant.php';</script>";
}