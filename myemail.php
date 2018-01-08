<?php
$name=$_GET['name'];
$to=$_GET['email'];
$subject = $_GET['subject'];
$message = $_GET['msg'];

         
         $header = "From:rushin.gindra@somaiya.edu \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            alert("Message sent successfully...");
         }else {
            alert(""Message could not be sent...");
         }
      ?>