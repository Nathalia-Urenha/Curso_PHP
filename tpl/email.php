<?php

require_once("vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Nathalia" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
// draw the template
$html = $tpl->draw( "index", true );

// Import PHPMailer classes into the global namespace 
// These must be at the top of your script, not inside a function 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; // Load Composer's autoloader 

// Instantiation and passing `true` enables exceptions 
$mail = new PHPMailer(true);


//Tell PHPMailer to use SMTP

//Enable SMTP debugging
// 0 = off (for production use) - produção
// 1 = client messages - fazendo testes
// 2 = client and server messages - ambiente de desenvolvimento, queremos ver todas as mensagens
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "naty.urenha@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "";

//Set who the message is to be sent from
$mail->SetFrom('naty.urenha@gmail.com', 'Nathalia Urenha');

//Set an alternative reply-to address
//$mail->addReplyTo('', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('nathalia.u@aluno.ifsp.edu.br');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>