<?php
$con = mysqli_connect('localhost','Lozi','1234'); 
if (!$con) 
die('No se pudo conectar: ' . mysqli_error($con)); 
 mysqli_select_db($con,'dbt'); 
$sql="SELECT id, nombre FROM datos"; 
$result = mysqli_query($con,$sql); 
echo "<form id='form'>
<select name='users' id='seleccion' onchange='mifuncion()'> ";
 echo "<option> Selecciona la persona:</option>";
while($ren = mysqli_fetch_array($result)) { 
 echo "<option value='" . $ren['id'] . "'>".$ren['nombre']."</option>";
}
 echo "</select>";
 echo "</form>";
mysqli_close($con);
?>