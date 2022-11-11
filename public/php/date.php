<?php
function SystemMode($modo) {
    $system = "";
    if ($modo == "T") {
        $system  = "TALONÁRIO";
    } else  {
        $system  = "SAT";
    }
    return $system;
}

function indexDate() {
    $data = date('d/m/Y');
    return $data;
}
?>