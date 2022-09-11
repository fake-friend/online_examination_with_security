<?php
$to_email = "sriharishkumar17@gmail.com,hepsya@students.tcarts.in,sangeeth_001@students.tcarts.in";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sriharishm@students.tcarts.in";

$mail=mail($to_email, $subject, $body, $headers);
if($mail)
{
    echo("succesfully sent");
}
else
{
    echo("not successfull");
}
/*$to = "sriharishkumar17@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/
?>

