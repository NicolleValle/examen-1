<?php
/*
Credenciales para la conexion DB
--------------------------------
*/

$contraseña = "dc9be6df45ae405f27dbe7e3dbe58a46dacdfd8722035e41a4286d35372a6760";
$usuario = "osjrkppzesqkkt";
$nombreBaseDeDatos = "d8srv5dg52hh01";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP del servidor remoto
$rutaServidor = "ec2-34-207-12-160.compute-1.amazonaws.com";
$puerto = "5432";

try {
  $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
  $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
