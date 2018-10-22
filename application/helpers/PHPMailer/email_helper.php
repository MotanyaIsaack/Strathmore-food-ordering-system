<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('send_email'))
{
     /**
     * @param mixed $settings an associative array with email data
     * 
     * @return Boolean TRUE | FALSE whether email is sent
     */
        function send_email($settings = array()){

            $mail = new PHPMailer;
            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'isaackmotanya6@gmail.com';   // SMTP username
            $mail->Password = 'GeekMotanya';        // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail-> setFrom("noreply@eatplicity.com", "Strathmore Food Ordering System"); 

            $mail->addAddress($settings['to']);   
            $mail->Subject = $settings['subject'];
            $mail->Body    = $settings['body'];

            $mail->IsHTML(true);

            return $mail->send();
        }
}