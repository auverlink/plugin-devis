<?php

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



<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>


<form method="post">

    <div>Souhaitez-vous que l'on optimise le référencement de votre site pour qu'il soit plus visible sur les moteurs de recherche ?</div>

    <input type="radio" name="seo" value="yes" />Oui
    <br/>
    <input type="radio" name="seo" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>
</body>
</html>