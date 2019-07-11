<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mensaje= $_POST['mensaje'];

	//Envio de Correo
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
    //Server settings
	    $mail->SMTPDebug  = 0;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host       = 'mail.jaksoluciones.com';  					  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                               // Enable SMTP authentication
	    $mail->Username   = 'programador10@jaksoluciones.com';                 // SMTP username
	    $mail->Password   = '65da44fga16f5g65af';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('programador10@jaksoluciones.com', $name);
	    $mail->addAddress('programador10@jaksoluciones.com', $name);     // Add a recipient
	    $mail->addReplyTo($email, $name);

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Te han contactado a través de www.laramed.net - Contáctanos';
	    $mail->CharSet ="UTF-8";
      $mail->Body    = '
      <table border="0" cellpadding="0" cellspacing="0" height="100%" lang="es" style="min-width:348px;" width="100%">
        <tbody>
            <tr height="32" style="height:32px">
                <td>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <div>
                        <div>
                        </div>
                    </div>
                    <table border="0" cellpadding="0" cellspacing="0" style="padding-bottom:20px;max-width:600px;min-width:300px">
                        <tbody>
                            <tr>
                                <td style="width:8px" width="8">
                                </td>
                                <td>
                                    <div align="center" style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:40px 20px; background-color: #fff;">
                                         <img height="24" src="https://laramed.net/img/logos/Logo_Laramed_Negro.png" style="height: 85px;  width:400px; margin-bottom: 15px;"/>
                                        <div style="font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:24px;text-align:center;word-break:break-word">
                                            <div style="font-size:24px">
                                                Te han contactado a través de tu Página Web <a href="https://laramed.net/contact-us.php" style="color: #2a0075;">www.laramed.net/contact-us.php</a>
                                            </div>
                                        </div>
                                        <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px; padding-left: 50px; padding-right: 50px; text-align: justify;">
                                            <p><b>Nombre:</b> '.$name.'</p>
                                            <p><b>E-mail:</b> '.$email.'</p>
                                            <p><b>Mensaje:</b> '.$mensaje.'</p>
                                             <div style="padding-top:32px;text-align:center">
                                                <a href="mailto:'.$email.'?subject=Escribe%20el%20asunto%20de%20este%20correo%20aquí&body=Escribe%20tu%20respuesta%20aquí." style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;line-height:16px;color:#ffffff;font-weight:400;text-decoration:none;font-size:14px;display:inline-block;padding:10px 24px;background-color:#006fab;border-radius:5px;min-width:90px" target="_blank" data-saferedirecturl="">
                                                    Responder a '.$email.' ➡
                                                </a>
                                            </div>
                                            <div style="margin: auto; word-break: break-all; overflow-wrap: break-word; word-wrap: break-word; width: 75%;">
                                                <p style="font-size: 13px; margin-top: 15px; margin-bottom: 10px;">¿No funciona el botón? Prueba con este enlace:</p>
                                                <a href="mailto:'.$email.'?subject=Escribe%20el%20asunto%20de%20este%20correo%20aquí&body=Escribe%20tu%20respuesta%20aquí." style="color: #2a0075;">
                                                    mailto:'.$email.'?subject=Escribe%20el%20asunto%20de%20este%20correo%20aquí&body=Escribe%20tu%20respuesta%20aquí.
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align:left">
                                        <div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.54);font-size:11px;line-height:18px;padding-top:12px;text-align:center">
                                            <div style="margin-bottom: 15px;">
                                                Has recibido este correo electrónico porque te han escrito a través de tu página de www.laramed.net/contact-us.php
                                            </div>
                                            <div style="direction:ltr">
                                                <a style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.54);font-size:11px;line-height:18px;padding-top:12px;text-align:center">
                                                    Copyright &copy; 2019 <br>Todos los derechos reservados por Laramed C.A. | © JakSoluciones C.A
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="width:8px" width="8">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
      ';
   $mail->AltBody = $name.' se ha puesto en contacto contigo a través de www.ijbuznego.com:'.$mensaje;
   if($mail->send()){
    header ("Location:". $_SERVER['HTTP_REFERER']);
  }
} catch (Exception $e) {
 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}