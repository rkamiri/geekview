<?php   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

class ModeleContact{

	function __construct()
	{
    }
    
    /*envoi le mail au admin de geekview */
    function sendMail(){
        $name= $_POST['email'];
        $title = $_POST['titre'];
        $text =  $_POST['message'];
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = $name;
        $to = "newsletter@geekview.tech";
        $subject = $title;
        $message = $text;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        return true;
    }
}   
?>
