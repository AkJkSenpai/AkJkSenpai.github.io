<?php

    if(isset($_POST['submit'])){
        $name = $_POST['nimi'];
        $email = $_POST['sposti'];
        $msg = $_POST['tarkennus'];

        $to = 'aku.paananen100@gmail.com';
        $subject = 'Form Submission';
        $message = "Nimi: " . $name . "\n" . "Tarkennus palveluun: " . "\n" . $msg;
        $headers = "From: " . $email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Lähetys onnistui</h1>";
        }else{
            echo "Jotain meni pieleen";
        }
    }
  
?>
