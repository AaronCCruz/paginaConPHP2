<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'Inicio';
switch ($var_getMenu) {
case "inicio":
require_once ('./Vistas/Inicio.php');
break;
case "registro":
require_once('./Vistas/registro.php');
break;
case "usuarios":
        include_once './model/usuarios.php';
        $sqlUsuarios = usuarios::consultar();
        include_once './Vistas/vistaUsuarios.php';
        break;
case "acercade":
require_once('./Vistas/acercade.php');
break;
default:
require_once('./Vistas/inicio.php');
}
?>