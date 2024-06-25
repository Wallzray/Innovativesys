<?php
$con= new mysqli("localhost", "root","", "Digitalestate");
session_start();
// owner login

    $username= $_POST['username'];
    $password= $_POST['password'];

   
    // db records;
    $record= $con->query("SELECT * FROM users WHERE Ownername LIKE '%$username%' AND Userpassword LIKE '%$password%'");
    $recno= mysqli_num_rows($record);
    if($recno == 1){
        header('Location: dashboard.php');
    }
    else{
        echo "<script>alert('Login Failed'); window.location.href='login.php';</script>";
    }

    foreach($record as $res){
        $_SESSION['owner']= $res['Ownername'];
        $_SESSION['houses']= $res['Houseno'];
    }
    $ownername= $_SESSION['owner'];
    $houseno= $_SESSION['houses'];
?>
