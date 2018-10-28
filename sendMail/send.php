<?php

if(!empty($_POST)) extract($_POST);


$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$pack = $_POST['pack'];


$dest="vanessa.asse@gmail.com";
$objet="Demande de devis via Auverlink.ovh";
$mess="
    
      \n";
$mess.="Nom : $lastname
    \n";
$mess.="Prénom : $firstname
    \n";
$mess.="Email : $email
    \n";
$mess.="Téléphone: $phone
    \n";
$mess.="Message : $message
    \n";
$mess.="Pack : $pack
    \n";
$mess.="
    \n";

$headers = "MIME-Version: 1.0\n";
$headers .= "content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: demandedevis@auverlink.ovh\n";
if (mail($dest,$objet,$mess,$headers)){
    header("location: mailOk.php");
}else{
    header("location: errorMail.php");
}


