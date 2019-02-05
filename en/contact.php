<?php

if(isset($_POST['email'])) {

    $email_to = "biuro@jsql.pl";
    $email_subject = "JSQL.pl page message from ";

    function died($error) {
        header("Location: http://jsql.pl?error=".$error);
        die();
    }

    if(!isset($_POST['subject']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }


    $email_subject = $email_subject.$_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

      if(!preg_match($email_exp, $email)) {
        $error_message .= 'Nieprawidłowy email <br />';
      }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }


    $email_message .= clean_string($message)."\n";

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

 header("Location: http://jsql.pl?sended=true");
 die();

}

?>