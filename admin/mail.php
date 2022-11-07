<?php
$to_email = "sriharishkumar17@gmail.com,hepsya@students.tcarts.in,sangeeth_001@students.tcarts.in";
$subject = "OTP verification";
$body = rand(1000,10000);
$_SESSION['otp']=$body;
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
?>