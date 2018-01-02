<?php
/**
 * Created by PhpStorm.
 * User: makeyos
 * Date: 02/01/2018
 * Time: 21:03
 */

    require_once 'AESCryptFileLib.php';
    require_once 'aes256/MCryptAES256Implementation.php';

    $begining = "%FDF-1.2 \n%âăĎÓ \n1 0 obj \n<</FDF<</F(IF-form.pdf)/Fields[";
    $ending = "]/ID[<77FBA2D8FDC49245A444071FB1551EC2><1A8C07D79225D048A39B337CB29FE9E7>]/UF(IF-form.pdf)>>/Type/Catalog>> \nendobj \ntrailer \n<</Root 1 0 R>> \n%%EOF \n";
    $file_name = date("Hm-dmY") . '.fdf';
    $file_name_encoded = $file_name . '.aes';

    foreach ($_POST as $key => $value) {
        $fields = $fields . "<</T(" . htmlspecialchars($key) . ")/V(" . htmlspecialchars($value) . ")>>";
    }

    file_put_contents($file_name, $begining . $fields . $ending);

    $mcrypt = new MCryptAES256Implementation();
    $lib = new AESCryptFileLib($mcrypt);
    @unlink($file_name_encoded);
    $lib->encryptFile($file_name, "4{?Za#65Q%gdMdy35:", $file_name_encoded);