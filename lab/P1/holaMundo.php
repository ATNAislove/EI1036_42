<?php

/**
 * * Descripción: Hola Mundo PHP
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Nieves <al375915@uji.es> 
 * * @copyright 2020 Nieves
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1
 * */

$nombre = "Ana";


if (isset($argv[1])) {
    $nombre = $argv[1];
}
if (isset($_GET['nombre'])) {
    $nombre =$_GET['nombre'];
}
print("<P>Hola, $nombre</P>");
print "\nFIN";
?>