<?php

include '../includes/header.php';

try
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

    // TODO L'exception ne s'affiche pas.
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['seo']) )
    {
        if(!$_POST['seo'])
        {
            throw new Exception("Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.");
        }
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-1 mb-4">
        </div>
        <div class="col-lg-10 mb-4" id="contentform">
            <form method="post">
                <div>Souhaitez-vous que l'on optimise le référencement de votre site pour qu'il soit plus visible sur les moteurs de recherche ?
                </div>
                <div class="auverlinkradio">
                    <div class="auverlinkradio-default">
                        <input type="radio" name="seo"  id="radio1"value="yes" />
                        <label for="radio1">Oui</label>
                    </div>
                    <div class="auverlinkradio-default">
                        <input type="radio" name="seo" id="radio2"value="no" />
                        <label for="radio2">Non</label>
                    </div>
                </div>
                <br/>
                <button type="submit" class="btn btn-auverlink">Question suivante</button>

            </form>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
?>