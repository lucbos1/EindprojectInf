<?php

if (isset($_POST["submit"])) {
    $leerlingNr = $_POST["leerlingNr"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (llnrExistsA($conn, $leerlingNr) !== false) {
        header("location: ../vragenlijst_A.php?error=already_submitted");
        exit(); 
    }

    $antwoorden_A = [];
    $i=1;
    for ($i = 1; $i <=80; $i++) {
        $antwoord = $_POST["vraag".$i];
        array_push($antwoorden_A, $antwoord);
    }

    $LG = 0; $CK = 0; $HA = 0; $PS = 0; $SA = 0; $RL = 0; $UV = 0; $ZP = 0; $SV = 0; $SW = 0;

    foreach ($antwoorden_A as $value) {
        if (str_contains($value, 'LG')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $LG = $LG + $value;
        }
        elseif (str_contains($value, 'CK')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $CK = $CK + $value;
        }
        elseif (str_contains($value, 'HA')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $HA = $HA + $value;
        }
        elseif (str_contains($value, 'PS')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $PS = $PS + $value;
        }
        elseif (str_contains($value, 'SA')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $SA = $SA + $value;
        }
        elseif (str_contains($value, 'RL')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $RL = $RL + $value;
        }
        elseif (str_contains($value, 'UV')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $UV = $UV + $value;
        }
        elseif (str_contains($value, 'ZP')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $ZP = $ZP + $value;
        }
        elseif (str_contains($value, 'SV')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $SV = $SV + $value;
        }
        elseif (str_contains($value, 'SW')) { 
            $value = substr($value, 2);
            $value = intval($value); 
            $SW = $SW + $value;
        }
    }
/*
    echo "LG:".$LG."<br>";
    echo "CK:".$CK."<br>";
    echo "HA:".$HA."<br>";
    echo "PS:".$PS."<br>";
    echo "SA:".$SA."<br>";
    echo "RL:".$RL."<br>";
    echo "UV:".$UV."<br>";
    echo "ZP:".$ZP."<br>";
    echo "SV:".$SV."<br>";
    echo "SW:".$SW."<br>";
*/

saveVragenlijstA($conn, $leerlingNr, $LG, $CK, $HA, $PS, $SA, $RL, $UV, $ZP, $SV, $SW);

}
else {
    header("location: ../vragenlijst_A.php?error=wrongsubmit");
    exit();  
}