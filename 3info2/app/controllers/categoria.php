<?php

require_once ('../models/Categoria.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action= 'index';
}

switch ($action){
    case 'index';
        $crud = new CategoriaCrud();
        $categorias = $crud->getCategoria();
        include '../views/categoria/index.php';
        break;
}


/////SLIDE 26