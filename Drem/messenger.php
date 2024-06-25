<?php
$con= new mysqli("localhost", "root","", "Digitalestate");

$msgdate= date('Y-m-d');

if(isset($_POST['send'])){
    $msg= $_POST['message'];
    

    $msgq=$con->query("INSERT INTO messages VALUES('$msgdate','$msg')");
    if($msgq==TRUE){
        echo "<script>alert('Message Sent'); window.location.href='message.php';</script>";
    }
}

if(isset($_POST['msend'])){
    $username= $_POST['username'];
    $msg= $_POST['message'];
    $msgq=$con->query("INSERT INTO ownermessages VALUES('$msgdate','$username','$msg')");
    if($msgq==TRUE){
        echo "<script>alert('Message Sent'); window.location.href='m_message.php';</script>";
    }
}
?>