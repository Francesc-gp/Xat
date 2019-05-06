<?php
include 'connexioBD.php';
date_default_timezone_set('Europe/Madrid');
$nombre = htmlspecialchars($_POST['nombre']);
$mensaje = htmlspecialchars($_POST['mensaje']);
$tiempo = date("H:i:s");
if(empty($mensaje) or empty($nombre) or is_null($nombre) or is_null($mensaje)) {
$alerta = "No+se+pueden+poner+valores+nulos.";
} 
else {
$nombre = mysqli_real_escape_string($conn, $nombre);
$mensaje = mysqli_real_escape_string($conn, $mensaje);
$tiempo = mysqli_real_escape_string($conn, $tiempo);
$sql = "INSERT INTO missatges (hora, text, usuari) VALUES ('$tiempo', '$mensaje', '$nombre')";
if (mysqli_query($conn, $sql)) {
   $alerta = "Mensaje+enviado+correctamente.";
} else {
   $alerta = "Error:+" . $sql . "+<br>+" . mysqli_error($conn);
}
}
mysqli_close($conn);
header("Location: index.php?alert=$alerta");
exit();
?> 
