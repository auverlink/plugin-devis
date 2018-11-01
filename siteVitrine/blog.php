<?php

include '../includes/header.php';

try
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

    // TODO L'exception ne s'affiche pas.
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['blog']) )
    {
        if(!$_POST['blog'])
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
                <div>Dans votre site, un espace "Blog" sera utile ?
                </div>
                <div class="auverlinkradio">
                    <div class="auverlinkradio-default">
                        <input type="radio" name="blog" id="radio1" value="yes" />
                        <label for="radio1">Oui</label>
                    </div>
                    <div class="auverlinkradio-default">
                        <input type="radio" name="blog" id="radio2" value="no" />
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