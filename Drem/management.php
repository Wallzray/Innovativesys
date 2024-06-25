<?php
$con= new mysqli("localhost", "root","", "Digitalestate");

if(isset($_POST['manageradd'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $houseno=$_POST['houseno'];
    $loc=$_POST['location'];

    $insert= $con->query("INSERT INTO users(Firstname,Lastname,Managername,Userpassword,Houselocation,Houseno) VALUES('$fname','$lname','$username','$password','$loc','$houseno')");
    if($insert== TRUE){
        echo "<script>alert('$fname Added Successfully'); window.location.href='manage.php';</script>";
    }
    else{
        echo $con->error;
    }
}


if(isset($_POST['update'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $houseno= $_POST['houseno'];
    $loc= $_POST['location'];

    $update= $con->query("UPDATE users SET Userpassword='$password',Houseno='$houseno', Houselocation='$loc' WHERE Managername='$username';");
    if($update){
        echo "<script>alert('Updated Successfully'); window.location.href='manage.php';</script>";
    }
}