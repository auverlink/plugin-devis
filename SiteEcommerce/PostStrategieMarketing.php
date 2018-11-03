<?php


$errors = [];

if(!array_key_exists('marketing', $_POST) || $_POST['marketing'] == "")
{
    $errors['pages'] = "Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.";

}

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;

    header('location:strategieMarketing.php');

}

else
{
    if(isset($_POST['marketing']) && $_POST['marketing'] == "yes")
    {
        header('Location:packPremium.php');
        exit();
    }

    if(isset($_POST['marketing']) && $_POST['marketing'] == "no")
    {
        header('Location:packMedium.php');
        exit();
    }
}

?>