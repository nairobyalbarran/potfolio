<?php
if (!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['comentarios'])) {

    $mail_from = "contacto@nairobyalbarran.esy.es";
    $tema = "Contacto desde el Sitio Web";
    $headers = "Content-Type: text/html; charset=UTF-8\n";
    $headers .= 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    
    $email_message="
    <table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Teléfono:</strong></td>
    <td width='80%' align='left'>$_POST[telefono]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Empresa:</strong></td>
    <td width='80%' align='left'>$_POST[empresa]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentarios:</strong></td>
    <td align='left'>$_POST[comentarios]</td>
  </tr>
</table>
";

    
  
    // Ahora se envía el e-mail usando la función mail() de PHP
    @mail($mail_from, $tema, $email_message, $headers);
   
    
    echo "Su mensaje ha sido enviado correctamente.<br />";
} else {
    echo "No se puede enviar el formulario, por favor verifica los campos";
}
?>

<html>
    <script>
        setTimeout(function() {
            window.close();
        }, 2000);
    </script>
</html>

