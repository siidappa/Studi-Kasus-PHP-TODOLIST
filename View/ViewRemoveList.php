<?php 
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Logic/removeList.php";

function viewRemoveList() {
    echo "Menghapus TODO" . PHP_EOL;

    $choice = inputHelper("Nomor ");

    if($choice == "x") {
        echo "Batal menghapus data" . PHP_EOL;
    }

    $success = removeList($choice);

    if($success) {
        echo "Sukses menghapus todo" . PHP_EOL;
    } else {
        echo "Gagal menghapus todo" . PHP_EOL;
    }
}