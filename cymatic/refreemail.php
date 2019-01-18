<?php
require 'sendgrid/sendgrid-php/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("arphf@aaroogya.org", "ARPHF");
$email->setSubject("Recieved An Refrel Request");
$email->addTo($_POST['email'], $_POST['fullname']);
$email->addContent(
    "text/html", "<strong>Hello the mail is working fine</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}