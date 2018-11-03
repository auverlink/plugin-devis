<?php


$errors = [];

if(!array_key_exists('pages', $_POST) || $_POST['pages'] == "")
{
    $errors['pages'] = "Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.";

}

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;

    header('location:nbPages.php');

}

else
{
    if(isset($_POST['pages']) && $_POST['pages'] == "Five pages")
    {
        header('Location:strategieMarketing.php');
        exit();
    }


    if(isset($_POST['pages']) && $_POST['pages'] == "Ten pages")
    {
        header('Location:strategieMarketing.php');
        exit();
    }
}

?>