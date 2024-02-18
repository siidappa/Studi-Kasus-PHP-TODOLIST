<?php 

require_once "../Models/todoModels.php";
require_once "../View/ViewRemoveList.php";
require_once "../Logic/addList.php";
require_once "../Logic/showList.php";

addTodoList("DAppa");
addTodoList("Naufal Fachrezi");

showTodoList();

viewRemoveList();

showTodoList();