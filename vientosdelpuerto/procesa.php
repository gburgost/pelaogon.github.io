<?php
if(isset($_POST['correo'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "informatica@mpcsa.cl";
$email_subject = "Contacto VDP página";
$email_from = "Contancto VDP página";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['correo']) ||
!isset($_POST['mensaje'])) {

echo "<div class='alert alert-danger'>Por favor, vuelva atrás y verifique la información ingresada</div>";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<div class='alert alert-success'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Correo enviado con éxito</div>";
}
?>
