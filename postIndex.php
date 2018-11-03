<?php

$errors = [];

if(!array_key_exists('site', $_POST) || $_POST['site'] == "")
{
$errors['site'] = "Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.";

}

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;

    header('location:index.php');

}

else
{
    if(isset($_POST['site']) && $_POST['site'] == "Site Vitrine")
    {
        header('Location:siteVitrine/nbPages.php');
        exit();
    }

    if(isset($_POST['site']) && $_POST['site'] == "Site E-commerce")
    {
        header('Location:siteEcommerce/nbPages.php');
        exit();
    }

}

?>
