<?php

session_start();

// TODO Session - verifier que la session est bien lancée

try
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

    // TODO L'exception ne s'affiche pas.
    else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['site']) )
    {
        if(!$_POST['site'])
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

    <div>Quel type de site souhaitez-vous ?</div>

    <input type="radio" name="site" value="Site Vitrine" />Site Vitrine
    <br/>
    <input type="radio" name="site" value="Site E-commerce" />Site E-commerce
    <br />
    <button type="submit">Validez</button>

</form>


</body>
</html>









