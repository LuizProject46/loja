<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail{

    public static function sendEmail($name,$email,$phone,$msg){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'luizguitar666@gmail.com';                     // SMTP username
            $mail->Password   = 'luizproject46';                               // SMTP password
            $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('luizguitar666@gmail.com', 'e2M');     // Add a recipient               // Name is optional
            $mail->addReplyTo($email);
            
           
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = '[SUPORTE] Contato pelo site ';
            $mail->Body    = '<b>'. $name. '</b> entrou em contato pelo site <br/> <br/> Informações de contato: <br/> <br/><b>Nome :</b> '.$name.' <br/><br/> <b>E-mail :</b> '.$email.' <br/><br/><b>Telefone :</b> '.$phone.' <br/><br/> <b>Mensagem :</b> <br/> <p>'.$msg.'</p>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $response = [
                "success" => 1,
                "msg" => '<strong>E-mail enviado com sucesso!</strong> <br> <p>Obrigado, <strong>'.$name.'</strong> ! Sua mensagm foi enviada para nós, em breve respoderemos você.</p>'
            ];
        } catch (Exception $e) {
            
            $response = [
                "success" => 2,
                "msg" => 'Ops! Houve um erro ao enviar o e-mail, tente novamente.</p>'
            ];
        }
        
        return $response;
    }

}


?>