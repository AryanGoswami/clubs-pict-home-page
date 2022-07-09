<?php
if(isset($_POST['submit'])){
// $name = $_POST['name'];
// $visitor_email=$_POST['email'];
// $subject=$_POST['subject'];
// $message=$_POST['message'];
$mailto="goswamiaryan22@gmail.com";
$from= $_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$subject2="Your message submitted successfully | CLUBS@PICT";
$message="Client name:". $name. "wrote the following message.". "\n\n". $_POST['message']
$message2="Dear ". $name. "\n\n" ."Thank you for contacting us ! We will get back to you shortly";
$headers="From: ". $from;
$headers2="From: ". $mailto;
$result=mail($mailto,$email,$message, $headers);
$result2=mail($from,$subject2,$message2,$headers2);
if( $result){
    echo '<script type="text/javascript">alert("Message was sent successfully, We will contact.") </script>';
    
}
else{
    echo '<script type="text/javascript">alert("Submission failed! Try again.") </script>';
}
}

// $email_subject='New Form Submission';

// $email_body= "User Name : $name.\n".
//                 "User Email : $visitor_email.\n".
//                     "Subject : $subject.\n".
//                         "User Message : $message.\n";

// $to = 'goswamiaryan22@gmail.com';
// $headers = "From: $email_from \r\n";

// $headers . = "Reply-To: $visitor_email \r\n";

// mail($mailto,$email_subject,$email_body, $headers);

// header("Location: contact.html");
?>

















?>
