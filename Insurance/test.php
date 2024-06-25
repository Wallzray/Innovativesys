<?php
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
    // echo $policyno

    date_default_timezone_set('Africa/Nairobi');
    $timein= date('H:i:s');
    echo $timein;
?>