<?php
$conn= new mysqli("localhost", "root","", "CHInsurance");
    
    $date= date('Y-m-d');
    $clientname = $_POST['clientname'];
    $clientnin = $_POST['clientnin'];
    $insurancetype = 'HEALTH';
    $package = $_POST['package'];
    $deposit = $_POST['deposit'];
    function generateRandomString($length=10){
        $characters='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charlength=strlen($characters);
        $polno='';
        for($i=0;$i<$length;$i++){
            $polno .= $characters[random_int(0,$charlength - 1)];
        }
        return $polno;
    }
    $policyno= generateRandomString();

    $query= $conn->query("INSERT INTO insurance(Policyno,Clientnin,Clientname,Joindate,Insurancetype,Package,Deposit) values('$policyno','$clientnin','$clientname','$date','$insurancetype','$package',$deposit)");
       if(!$query){
        echo $conn->error;
    }
    else{
        header("Location: health.php");
    }
    
    // $contribquery= $conn->query("INSERT INTO contributions values('$clientnin','$date','Purchase',$deposit, $deposit)");    
    // if(!$contribquery){
    //     echo $conn->error;
    // }
    // else{
    //     header("Location: health.php");
    // }
    ?>