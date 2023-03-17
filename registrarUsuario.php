<?php
$id = intval($_POST['id']);
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$pws = $_POST['pws'];
$pwsCifrado = password_hash($pws, PASSWORD_DEFAULT);

$con = mysqli_connect('localhost', 'JoseCarlos', '1234');

if (!$con)
    die('No se pudo conectar: ' . mysqli_error($con));

mysqli_select_db($con, 'login');

$sql = "INSERT INTO usuarios (id, usuario, correo, contrasenia)";
$sql = $sql . " VALUES(" . $id . ", ' " . $usuario . " ', ' " . $correo . " ', ' " . $pwsCifrado . " ')";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>