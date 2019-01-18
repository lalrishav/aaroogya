<?php
require 'sendgrid/sendgrid-php/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
echo $refreemail = $_POST[''];
echo $applicantmail = $_POST[''];
echo $refreename = $_POST[''];
echo $applicantname = $_POST[''];

$emailToRefree = new \SendGrid\Mail\Mail(); 
$emailToRefree->setFrom("arphf@aaroogya.org", "ARPHF");
$emailToRefree->setSubject("Recieved An Refrel Request");
$emailToRefree->addTo($refreemail, $refreename);
$emailToRefree->addContent(
    "text/html", "<a href=''>https://aaroogya.prg/refree.php?email='$applicantmail'</a>"
);
$sendgrid = new \SendGrid('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');
try {
    $responseFromRefree = $sendgrid->send($emailToRefree);
    print $responseFromRefree->statusCode() . "\n";
    print_r($responseFromRefree->headers());
    print $responseFromRefree->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

$emailToApplicant = new \SendGrid\Mail\Mail(); 
$emailToApplicant->setFrom("arphf@aaroogya.org", "ARPHF");
$emailToApplicant->setSubject("Application Recieved");
$emailToApplicant->addTo($_POST['email'], $_POST['fullname']);
$emailToApplicant->addContent(
    "text/html", "<p>'$applicantname',<br><br><br>Thank you for uploading your solution for Aarohan Social Innovation Awards.<br><br>For queries, please write to us at arphf@aaroogya.org.<br><br>We wish you all the best.<br><br><br>Regards,<br><br>Aaroogya Research and Public Health Fellowship"
);
try {
    $responseFromApplicant = $sendgrid->send($emailToRefree);
    print $responseFromApplicant->statusCode() . "\n";
    print_r($responseFromApplicant->headers());
    print $responseFromApplicant->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}