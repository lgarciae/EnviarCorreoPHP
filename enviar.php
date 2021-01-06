<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$para = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$carta = "De: $nombre \n";
$carta .="Correo: $correo \n";
$carta .= "Mensaje: $mensaje";
mail($para, $asunto, $carta);
echo "
      <script>
        alert('Mensaje enviado con éxito a $para !!!');
        location.href='EnviarCorreo.html';
      </script>
    ";
?>
