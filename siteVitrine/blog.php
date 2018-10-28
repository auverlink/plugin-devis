<?php

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


<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>


<form method="post">

    <div>Dans votre site, un espace "Blog" sera utile ? </div>

    <input type="radio" name="blog" value="yes" />Oui
    <br/>
    <input type="radio" name="blog" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>
</body>
</html>