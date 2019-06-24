<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	class ModeloEmail{

		public function mdlEnviarCorreo($email,$nombres,$mensaje){
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
			    //Server settings
			    $mail->CharSet="UTF-8";
			    $mail->Encoding="quoted-printable";
			    $mail->isSMTP(); 
			    $mail->SMTPOptions = array(
				    'ssl' => array(
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    )
				);                                     // Set mailer to use SMTP
			    $mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = PHPMAILER_USER;                 // SMTP username
			    $mail->Password = PHPMAILER_PASS;                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = PHPMAILER_PORT;                                    // TCP port to connect to
			    //Recipients
			    $mail->setFrom(PHPMAILER_USER, 'Electric Systems SRL');
			    $mail->addAddress(PHPMAILER_USER,$nombres);     // Add a recipient              // Name is optional
			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Mensaje de cliente '.$nombres;
			    $mail->Body    = EmailTemplate($nombres,$email,$mensaje);
			    echo $mail->send();
			} catch (Exception $e) {
				echo '<div class="alert alert-dismissible alert-danger">
				 <button type="button" class="close" data-dismiss="alert">&times;</button>
				 <strong>Error!</strong>'.$mail->ErrorInfo.'
				 </div>';
			}
		}
	}
?>