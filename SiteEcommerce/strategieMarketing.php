
<?php

include '../includes/header.php';

try
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

    // TODO L'exception ne s'affiche pas.
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['marketing']) )
    {
        if(!$_POST['marketing'])
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
                <div>Souhaitez-vous que l'on vous propose un accompagnement en stratégie marketing
                    afin d'augmenter la visibilité de votre e-commerce ?
                </div>
                <div class="auverlinkradio">
                    <div class="auverlinkradio-default">
                        <input type="radio" name="marketing" id="radio1" value="yes" />
                        <label for="radio1">Oui</label>
                    </div>
                    <div class="auverlinkradio-default">
                        <input type="radio" name="marketing" id="radio2" value="no" />
                        <label for="radio2">Non</label>
                    </div>
                </div>
                <
                <br/>
                <button type="submit" class="btn btn-auverlink">Question Suivante</button>
            </form>
        </div>
    </div>

</div>

        <?php

        include '../includes/footer.php';
        ?>

