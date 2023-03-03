<?php
$id = intval($_POST['id']); 
$nombre = $_POST['nom'];
$apellido = $_POST['ap'];
$edad = intval($_POST['ed']);
$nacimiento = $_POST['nac'];
$trabajo = $_POST['trab'];
$con = mysqli_connect('localhost','Lozi','1234'); 
 if (!$con) 
 die('No se pudo conectar: ' . mysqli_error($con)); 
 mysqli_select_db($con,'dbt'); 
 $sql="INSERT INTO datos(id, nombre, apellido, edad, nacimiento, trabajo)";
 $sql=$sql." VALUES(".$id.",'".$nombre."' ,'".$apellido."' ,".$edad." ,'".$nacimiento."' ,'".$trabajo."')"; 
 $result = mysqli_query($con,$sql); 
 mysqli_close($con);
?>