<?php
$con= new mysqli("localhost", "root","", "Digitalestate");
session_start();
$managername= $_POST['man_username'];
$password= $_POST['password'];

// db records;
$record= $con->query("SELECT * FROM users WHERE Userpassword LIKE '%$password%' AND Managername LIKE '%$managername%'");
$recno= mysqli_num_rows($record);
if($recno== 1){
    header('Location: m_dashboard.php');
}
else{
    echo "<script>alert('Login Failed'); window.location.href='login.php';</script>";
}

foreach($record as $res){
    $_SESSION['manager']= $res['Managername'];
}
$manager= $_SESSION['manager'];

