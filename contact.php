<?php
    $name = $_POST['nimi'];
    $visitor_email = $_POST['sposti'];
    $message = $_POST['tarkennus'];


    $email_from = 'yourname@yourwebsite.com';

    $email_subject = "New Form submission";

    $email_body = "You have received a new message from the user $name.\n".
                          "Here is the message:\n $message".

    $to = "aku.paananen100@gmail.com";

    $headers = "From: $email_from \r\n";
                        
    $headers .= "Reply-To: $visitor_email \r\n";
                        
    mail($to,$email_subject,$email_body,$headers);

    function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
  
?>
