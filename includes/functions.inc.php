<?php

# Dit document bevat alle functies met betrekking tot het inloggen en aanmelden
# en het verwerken van errors in 1 van deze processen

# Deze functie creërt een nieuwe rij in de database voor een
function saveVragenlijstA($conn, $leerlingNr, $LG, $CK, $HA, $PS, $SA, $RL, $UV, $ZP, $SV, $SW) {
    $sql = "INSERT INTO lijst_A_resultaten (llNr, A_LG, A_CK, A_HA, A_PS, A_SA, A_RL, A_UV, A_ZP, A_SV, A_SW) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    # Indien nodig kunnen er hierboven nieuwe kolomen worden toegevoegd aan de database !Let op! het aantal vraagtekens 
    # staat voor de hoeveelheid waarden, ditzelfde geldt voor het aantal s'en 7 regels hieronder
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../vragenlijst_A.php?error=stmtfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $leerlingNr, $LG, $CK, $HA, $PS, $SA, $RL, $UV, $ZP, $SV, $SW);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../vragenlijst_A.php?error=none");
    exit(); 
}

# Deze functie controleert of de vragenlijst al eens is ingevuld door dit leerlingnummer
function llnrExistsA($conn, $leerlingNr) {
    $sql = "SELECT * FROM lijst_A_resultaten WHERE llNr = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../vragenlijst_A.php?error=stmtfailed");
        exit(); 
    }
    
    mysqli_stmt_bind_param($stmt, "s", $leerlingNr);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function saveVragenlijstB($conn, $leerlingNr, $LG, $CK, $HA, $PS, $SA, $RL, $UV, $ZP, $SV, $SW) {
    $sql = "INSERT INTO lijst_B_resultaten (llNr, B_LG, B_CK, B_HA, B_PS, B_SA, B_RL, B_UV, B_ZP, B_SV, B_SW) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    # Indien nodig kunnen er hierboven nieuwe kolomen worden toegevoegd aan de database !Let op! het aantal vraagtekens 
    # staat voor de hoeveelheid waarden, ditzelfde geldt voor het aantal s'en 7 regels hieronder
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../vragenlijst_B.php?error=stmtfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $leerlingNr, $LG, $CK, $HA, $PS, $SA, $RL, $UV, $ZP, $SV, $SW);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../vragenlijst_B.php?error=none");
    exit(); 
}

# Deze functie controleert of de vragenlijst al eens is ingevuld door dit leerlingnummer
function llnrExistsB($conn, $leerlingNr) {
    $sql = "SELECT * FROM lijst_B_resultaten WHERE llNr = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../vragenlijst_B.php?error=stmtfailed");
        exit(); 
    }
    
    mysqli_stmt_bind_param($stmt, "s", $leerlingNr);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

?>