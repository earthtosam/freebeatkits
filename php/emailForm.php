<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $mailTo='worldlycomet@yahoo.com';
        $subject='Freebeatkits Website Form Submission';
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the following: "."\n\n".$msg;
        $headers="From: worldlycomet@hotmail.com";

        if(mail($mailTo, $subject, $message, $headers)){
            header('Location: message-sent.html');
        }
        else{
            header('Location: message-error.html');
        }
    }
?>