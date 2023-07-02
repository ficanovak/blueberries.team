<?php

// Replace this with your own email address
$owner = 'novakfica@gmail.com';


if ($_POST) {

    $full_name = trim(stripslashes($_POST['name']));    
    // $email = trim(stripslashes($_POST['email']));
    // $subject = trim(stripslashes($_POST['subject']));
    $phone = trim(stripslashes($_POST['phone']));
    $amount = trim(stripslashes($_POST['amount']));
    $address = trim(stripslashes($_POST['address']));
    // $contact_message = trim(stripslashes($_POST['message']));
    $error = array();
    $email = $owner

    // Check First Name
    if (strlen($_POST['name']) < 2) {
        $error['name'] = "Molimo vas unesite ime i prezime.";
    }
    
    // // Check Last Name
    // if (strlen($_POST['last_name']) < 3) {
    //     $error['name'] = "Molimo vas unesite prezime.";
    // }
    
    // Check Message
    // if (strlen($contact_message) < 15) {
    //     $error['message'] = "Molimo vas unesite poruku koja sadrži više od 15 karaktera.";
    // }
    
    // Subject
    if ($subject == '') { $subject = "Nova porudžbina od " . $full_name . " - " . $amount . "kg"; }

    // Set Message
    $message  = "Email od: " . $full_name . "<br />";
    $message .= "Adresa: " . $address . "<br />";
    $message .= "Telefon: " . $phone;
    $message .= "Količina: " . $amount
    // $message .= $contact_message;
    $message .= "<br /> ----- <br /> Ovaj mail je poslat sa sajta borovnice.net <br />";

    // Set From: header
    $from = $full_name ;   
    

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (!$error) {
            
        $mail = mail($owner, $subject, $message, $headers);

        if ($mail) { echo "OK"; } else { echo "Došlo je do greške, molimo vas pokušajte ponovo."; }

    } # end if - no validation error    

}

?>