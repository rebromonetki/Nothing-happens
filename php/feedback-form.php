<?php
   if($_POST['topic'] == 1) {
    $topic = 'Поделиться анекдотом';
   }  
   elseif($_POST['topic'] == 2) {
    $topic = 'Поделиться зарплатой';
   }  
   elseif($_POST['topic'] == 3) {
    $topic = 'Поделиться на ноль';
   }   
   else {
    $topic = 'Поделиться ничем';
   } 
   
   $to = "po4tamnenamail@mail.ru";
   $from = trim($_POST['email']);

   $message = htmlspecialchars($_POST['message']);
   $message = urldecode($message);
   $message = trim($message);

   if(mail($to, $topic, $message)) {
    echo 'Письмо улетело';
   } else {
    echo 'Хмм..похоже, нелётная для писем погода';
   }
   ?>