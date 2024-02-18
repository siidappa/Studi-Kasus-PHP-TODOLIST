<?php 

function inputHelper(string $info): string {
    echo "$info: ";
    $resutl = fgets(STDIN);
    return trim($resutl);
}