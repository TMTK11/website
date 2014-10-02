<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);

class ContactModel{

	public function __construct(){

		return true;
	}

	//Sends a mail with details of sender atached
	public function sendMessage($message, $senderDetails){

		$to = "test@ict-lab.nl";
		$subject = "TMTK11 - ContactMail";
		$email = "testSubject@ict-lab.nl";

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: TMTK11 <catchall@ict-lab.nl>";
		$headers[] = "Reply-To: TMTK11 <catchall@ict-lab.nl>";
		$headers[] = "Subject: New Contact Request";
		$headers[] = "X-Mailer: PHP/".phpversion();

		if(!mail($to, $subject, $email, implode("\r\n", $headers)))
			print("mail not sent");

	}


}

?>