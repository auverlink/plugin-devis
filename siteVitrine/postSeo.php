<?php

$errors = [];

if(!array_key_exists('seo', $_POST) || $_POST['seo'] == "")
{
    $errors['seo'] = "Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.";

}

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;

    header('location:seo.php');

}

else
{
    if(isset($_POST['seo']) && $_POST['seo'] == "yes")
    {
        header('Location:blog.php');
        exit();
    }

    if(isset($_POST['seo']) && $_POST['seo'] == "no")
    {
        header('Location:packStarter.php');
        exit();
    }

}

?>