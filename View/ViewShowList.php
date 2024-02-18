<?php
require_once __DIR__ . "/../Models/todoModels.php";
require_once __DIR__ . "/../Logic/showList.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../View/ViewAddList.php";
require_once __DIR__ . "/../View/ViewRemoveList.php";

function viewShowList() {
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah data" . PHP_EOL;
        echo "2. Hapus data" . PHP_EOL;
        echo "X. Keluar" . PHP_EOL;

        $choice = inputHelper("Pilih");

        if ($choice == "1") {
            viewAddList();
        } elseif ($choice == "2") {
            viewRemoveList();
        } elseif ($choice == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Byeeee" . PHP_EOL;
}