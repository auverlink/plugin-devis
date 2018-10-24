<?php

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


<html>
<body>
<form method="post">

    <div>Souhaitez-vous que l'on vous propose un accompagnement en stratégie marketing
        afin d'augmenter la visibilité de votre e-commerce ?</div>

    <input type="radio" name="marketing" value="yes" />Oui
    <br/>
    <input type="radio" name="marketing" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>
</body>
</html>