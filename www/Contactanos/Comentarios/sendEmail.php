<?php
$mail="deaz1138@gmail.com";

$fecha=date("d-m-Y");
$hora=date("H:i:s");

$nombre = $_POST['inputNombre'];
$apellidoPaterno = $_POST['inputApellidoPaterno'];
$apellidoMaterno = $_POST['inputApellidoMaterno'];
$domicilio = $_POST['inputDomicilio'];
$colonia = $_POST['inputColonia'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['inputTelefono'];
$email = $_POST['inputEmail'];
$derechohabiente = $_POST['opciones'];
$opinion = $_POST['opinion'];
$comentario = $_POST['textArea'];

$message = "
Nombre: ".$nombre .$apellidoPaterno .$apellidoMaterno."
Tipo de Derechohabiente: ".$derechohabiente."
Domicilio: ".$domicilio .$colonia .$ciudad .$estado."
Teléfono: ".$telefono."
Correo elctrónico: ".$email."


Tipo de opinión: ".$opinion."

Opinión/Comentario: ".$comentario."
Enviado el ".$fecha." a las ".$hora."
";

$gracias="./enviado.php";


if (mail ($mail, "Comentario - Sugerencia", $message)){
Header("location: $gracias");
echo 'Mensaje enviado correctamente';}
else{
echo 'Su mensaje no se pudo enviar';
}
?>