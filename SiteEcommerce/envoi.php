<?php

    if(!empty($_POST)) extract($_POST);


    ////-----------------------------------------------
    ////--envois du mail de contact
    ////-----------------------------------------------

    $dest="scarruezco@gmail.com";

    $objet="Devis depuis le site internet";
    $mess="<html><body>
    <p><br>
      \n";
    $mess.="Nom : $nom<br>
    \n";
    $mess.="E-mail : $email<br>
    \n";
    $mess.="Pack : $objetbis<br>
    \n";
    $mess.="Message : $msg<br>
    \n";

    $mess.="</p>
    </body></html>\n";

    $headers = "MIME-Version: 1.0\n";
    $headers .= "content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: losfor@losfor.com\n";

    if (mail($dest,$objet,$mess,$headers)){
        header("location: mail_ok.php");
    }else{
        header("location: mail_erreur.php");
    }
    ?>