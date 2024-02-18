<?php 
require_once "../Models/todoModels.php";
require_once "../Logic/addList.php";
require_once "../Logic/removeList.php";
require_once "../Logic/showList.php";

addTodoList("Dappa");
addTodoList("Naufal");
addTodoList("Fachrezi");
addTodoList("Budy");

showTodoList();
removeList(3);
showTodoList();
removeList(2);
showTodoList();

$success = removeList(4);
var_dump($success);

showTodoList();