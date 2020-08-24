<?php
$remitente = $_POST['email'];
$destinatario = 'popupmktg@gmail.com'; 
$asunto = 'Mensaje desde el Sitio Web - Pop Up Marketing'; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Celular: " . $_POST["phone"] . "\r\n";
    $cuerpo .= "Provincia: " . $_POST["provincia"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["message"] . "\r\n";
    
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
     $headers .= "From: \"".$_POST['name']." <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'enviado.html'; 
}
?>
