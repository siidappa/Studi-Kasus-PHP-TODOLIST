<?php 

require_once "../Models/todoModels.php";
require_once "../Logic/addList.php";

addTodoList("Dappa");
addTodoList("Naufal");
addTodoList("Fachrezi");

var_dump($todolist);