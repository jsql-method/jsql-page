<?php

/* send.php */

if (isset($_POST["submit"])) {

$plik = $_FILES['plik']['name']; // pobranie nazwy pliku
$plik_tmp = $_FILES['plik']['tmp_name']; // tymczasowy folder zapisu (na serwerze)

require("class.phpmailer.php"); // wskazanie klasy PhpMailer
$mail = new PHPMailer(); // utworzenie nowego egzemplarza klasy
$mail->PluginDir = "phpmailer/"; // folder biblioteki
$mail->From = 'praca@jsql.pl'; // email nadawcy
$mail->FromName = 'jsql.pl aplikacja na stanowisko'; // podpis nadawcy (np: imię i nazwisko)
$mail->Host = "smtp.jsql.pl"; // np.: smtp.wp.pl
$mail->Mailer = "smtp.jsql.pl"; // protokół SMTP
$mail->Username = "praca@jsql.pl";
$mail->Password = "jsql#123";
$mail->SMTPAuth = true; // autoryzacja do serwera poczty (true = wymagana)
$mail->SetLanguage("pl", "phpmailer/language/"); // język w jakim będą wyświetlane ewentualne komunikaty błędów
$mail->Subject = $_POST['pozycja']." ".$_POST['imie'].' CV'; // temat wiadomości
$mail->CharSet = 'utf-8'; // kodowanie wiadomości
$mail->IsHTML(true); // formatowanie HTML
$mail->Body .= 'Imię i Nazwisko: '.$_POST['imie'].'<br /><br />';
$mail->Body .= 'Stanowisko: '.$_POST['pozycja'].'<br /><br />';
$mail->Body .= 'E-mail: '.$_POST['e-mail'].'<br /><br />';
$mail->Body .= 'Tresc: '.$_POST['tresc'].'<br /><br />'; 
$mail->AddAddress("praca@jsql.pl",""); // adres odbiorcy
$mail->AddAttachment($plik_tmp, $plik); // dołączamy plik
      
   if (!$mail->Send())
   {
     echo "<script> window.location = \"http://jsql.pl/aplikuj.php?send=false\" </script>";
   } else {
     $mail->ClearAddresses(); // czyścimy z pamięci adresy meilowe
     $mail->ClearAttachments(); // czyścimy treść meila
      echo "<script> window.location = \"http://jsql.pl/aplikuj.php?send=true\" </script>";
   }

}

?> 