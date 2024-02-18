<?php 

require_once "../View/ViewAddList.php";
require_once "../Logic/showList.php";
require_once "../Logic/addList.php";

addTodoList("Dappa");
addTodoList("Naufal");
addTodoList("Fachrezi");

viewAddList();

showTodoList();
viewAddList();

showTodoList();