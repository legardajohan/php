<?php

// logica para capturar la pagina que queremos abrir
$pages = isset($_GET['p']) ? strtolower($_GET['p']) : 'select';

// cabecera head
include_once("pages/header.php");

// code para ingresar a las paginas deseadas
include("pages/$pages.php");

// footer
include_once("pages/footer.php");

?>