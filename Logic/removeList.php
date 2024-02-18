<?php 
// menghapus list
function removeList(int $number): bool {
    global $todolist;

    if($number > sizeof($todolist)):
        return false;
    endif;

    for ($i = $number; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}