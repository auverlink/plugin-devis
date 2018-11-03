<?php

$errors = [];

if(!array_key_exists('blog', $_POST) || $_POST['blog'] == "")
{
    $errors['blog'] = "Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.";

}

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;

    header('location:blog.php');

}

else
{
    if(isset($_POST['blog']) && $_POST['blog'] == "yes")
    {
        header('Location:packPremium.php');
        exit();
    }

    if(isset($_POST['blog']) && $_POST['blog'] == "no")
    {
        header('Location:packMedium.php');
        exit();
    }

}

?>