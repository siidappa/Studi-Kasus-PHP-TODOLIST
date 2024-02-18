<?php 

// Menampilkan Todo list
function showTodoList() {
    global $todolist;

    echo "TODO LIST". PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
