<?php

include '../includes/header.php';

try
{
    if(isset($_POST['pages']) && $_POST['pages'] == "One page")
    {
        header('Location:seo.php');
        exit();
    }

    if(isset($_POST['pages']) && $_POST['pages'] == "Five pages")
    {
        header('Location:blog.php');
        exit();
    }


    if(isset($_POST['pages']) && $_POST['pages'] == "Ten pages")
    {
        header('Location:blog.php');
        exit();
    }

    // TODO L'exception ne s'affiche pas.
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pages']) )
    {
        if(!$_POST['pages'])
        {
            throw new Exception("Vous devez choisir une de ces trois propositions pour poursuivre votre demande de devis.");
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
                <div>
                    Combien de pages contiendra votre site ?
                </div>
                <div class="auverlinkradio">
                    <div class="auverlinkradio-default">
                        <input type="radio" class="form-control"name="pages" id="radio1" value="One page" />
                        <label for="radio1">Uniquement 1 page</label>
                    </div>
                    <div class="auverlinkradio-default">
                        <input type="radio" class="form-control" name="pages" id="radio2" value="Five pages" />
                        <label for="radio2">Entre 1 et 5 pages</label>
                    </div>
                    <div class="auverlinkradio-default">
                        <input type="radio" class="form-control" name="pages" id="radio3" value="Ten pages" />
                        <label for="radio3">De 6 à 10 pages</label>
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