<?php
$conn= new mysqli("localhost", "root","", "CHInsurance");

    $clientname = $_POST['clientname'];
    $clientnin = $_POST['clientnin'];
    $date= date('Y-m-d');
    $insurancetype = "ACCIDENT";
    $package = $_POST['package'];
    $deposit = $_POST['deposit'];
    $trusteename = $_POST['trusteename'];
    $trusteenumber = $_POST['trusteenumber'];
    function generateRandomString($length=10){
        $characters='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charlength=strlen($characters);
        $policyno='';
        for($i=0;$i<$length;$i++){
            $policyno .= $characters[random_int(0,$charlength - 1)];
        }
        return $policyno;
    }
    $policyno= generateRandomString();

    $query= $conn->query("INSERT INTO insurance values('$policyno','$clientnin','$clientname','$date','$insurancetype','$package',$deposit,'$trusteename','$trusteenumber')");
    if(!$query){
        echo $conn->error;
    }
    
    $contribquery= $conn->query("INSERT INTO contributions values('$clientnin','$date','PURCHASE',$deposit, $deposit)");
    if(!$contribquery){
        echo $conn->error;
    }
    else{
        header("Location: accident.php");
    }
?>