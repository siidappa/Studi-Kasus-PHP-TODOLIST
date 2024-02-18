<?php 
require_once __DIR__ ."/Models/todoModels.php";
require_once __DIR__ ."/Logic/showList.php";
require_once __DIR__ ."/Logic/addList.php";
require_once __DIR__ ."/Logic/removeList.php";
require_once __DIR__ ."/View/ViewShowList.php";
require_once __DIR__ ."/View/ViewAddList.php";
require_once __DIR__ ."/View/ViewRemoveList.php";
require_once __DIR__ ."/Helper/InputHelper.php";

echo "Aplikasi Todo list". PHP_EOL;

viewShowList();