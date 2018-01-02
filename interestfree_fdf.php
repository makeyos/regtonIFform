<?php
/**
 * Created by PhpStorm.
 * User: makeyos
 * Date: 02/01/2018
 * Time: 21:03
 */

    require_once 'AESCryptFileLib.php';
    require_once 'aes256/MCryptAES256Implementation.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $begining = "%FDF-1.2 \n%âăĎÓ \n1 0 obj \n<</FDF<</F(IF-form.pdf)/Fields[";
    $ending = "]/ID[<77FBA2D8FDC49245A444071FB1551EC2><1A8C07D79225D048A39B337CB29FE9E7>]/UF(IF-form.pdf)>>/Type/Catalog>> \nendobj \ntrailer \n<</Root 1 0 R>> \n%%EOF \n";
    $file_name = 'files/' . date("Hm-dmY") . '.fdf';
    $file_name_encoded = $file_name . '.aes';

    foreach ($_POST as $key => $value) {
        $fields .= "<</T(" . htmlspecialchars($key) . ")/V(" . htmlspecialchars($value) . ")>>";
    }

    file_put_contents($file_name, $begining . $fields . $ending);

    $mcrypt = new MCryptAES256Implementation();
    $lib = new AESCryptFileLib($mcrypt);
    @unlink($file_name_encoded);
    $lib->encryptFile($file_name, "4{?Za#65Q%gdMdy35:", $file_name_encoded);

    $email = new PHPMailer(true);
    $email->From      = 'you@example.com';
    $email->FromName  = 'Your Name';
    $email->Subject   = 'Message Subject';
    $email->Body      = $bodytext;
    $email->AddAddress( 'destinationaddress@example.com' );

    $file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

    $email->AddAttachment( $file_name_encoded , 'NameOfFile.pdf' );

    return $email->Send();

    $to = 'maciej@regton.com';

    $subject = 'Interest Free Application Form (' . strip_tags($_POST['Email']) . ')';

    $headers = "From: admin@regton.com\r\n";
    $headers .= "Reply-To: admin@regton.com\r\n";
    $headers .= "CC: maciej@regton.com\r\n";
    $headers .= "BCC: test@egton.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $message = '<html><body>';
    $message .= '<strong>Interest Free Application Form #</strong>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['Names']) . " " . strip_tags($_POST['Surname']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Email']) . "</td></tr>";
    $message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['typeOfChange']) . "</td></tr>";
    $message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
    $message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
    $addURLS = $_POST['addURLS'];
    if (($addURLS) != '') {
        $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
    }
    $curText = htmlentities($_POST['curText']);
    if (($curText) != '') {
        $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
    }
    $message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";


    mail($to, $subject, $message, $headers, '-fwebmaster@regton.com');