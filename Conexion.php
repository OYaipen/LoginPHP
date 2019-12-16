<?php
$conexion = null;
$servidor = 'localhost';
$bd = 'loginPHP';
$user = 'root';
$pass = 'kaseocan99';

try {
    $conexion = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $user, $pass);
    $conexion->exec("set names utf8");
} catch (\Throwable $th) {
    echo "Error de Conexion";
    exit;
}
return $conexion;
