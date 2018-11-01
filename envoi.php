<?php

    if(!empty($_POST)) extract($_POST);


    ////-----------------------------------------------
    ////--envoi du mail de contact
    ////-----------------------------------------------

    $dest="scarruezco@gmail.com";

    $objet="Devis depuis le site internet";
    $mess="
    
      \n";
    $mess.="Nom : $nom
    \n";
    $mess.="Prénom : $prenom
    \n";
    $mess.="E-mail : $email
    \n";
    $mess.="Tel : $tel
    \n";
    $mess.="Entreprise : $entreprise
    \n";
    $mess.="Fonction : $fonction
    \n";

    $mess.="Message : $msg
    \n";

    $mess.="Pack : $pack
    \n";

    $mess.="
    \n";

    $headers = "MIME-Version: 1.0\n";
    $headers .= "content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: scarruezco@gmail.com\n";

    if (mail($dest,$objet,$mess, $pack, $headers)){
        header("location: mail_ok.php");
    }else{
        header("location: mail_erreur.php");
    }
    ?>