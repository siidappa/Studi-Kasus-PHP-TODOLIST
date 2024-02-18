<?php
require_once __DIR__ . "/../Models/todoModels.php";
require_once __DIR__ . "/../Logic/addList.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

function viewAddList() {
    echo "Menambah Todo". PHP_EOL;
    $todo = inputHelper("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todolist" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}