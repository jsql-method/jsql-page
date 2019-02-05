<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message .= <<<TEXT
	W sprawie ogłoszenia: {$_POST['ogloszenie']}
    Imię i Nazwisko: {$_POST['name']}
    E-mail: {$_POST['email']}
    Telefon: {$_POST['telefon']}
	CV: {$_POST['cv']}    
    Treść: {$_POST['message']}    
TEXT;
    
	
	$to      = 'hello@grafik-mikolajki.pl';
	$subject = 'Kontakt w sprawie ogłoszenia';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	
	
	
	
	
	
	
	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Wiadomość wysłana! Dziękujemy.';
    }
	else{
		$res['message'] = 'Wysłanie wiadomości nie powiodło się! Proszę o kontakt bezpośredni na adres email: roxana.lambert@2linesfusion.pl';
	}
	
	
	echo json_encode($res);
}

?>