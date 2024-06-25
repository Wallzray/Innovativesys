<?php
$conn= new mysqli("localhost", "root","", "CHInsurance");
$sdate= date('Y-m-d');
if(isset($_POST['callback_submit'])){
    $clientname= $_POST['clientname'];
    $email=  $_POST['email'];
    $phone= $_POST['phone'];
    $comment= $_POST['comment'];

    $query= $conn->query("INSERT INTO messages VALUES('$sdate','$clientname','$email','$phone','$comment')");
    if(!$query){
        echo "Error: ".$conn->error;
    }
    else{
        echo "<script>alert('Submitted Successfully');</script>";
        // header("Location:contact.php");
    }
};