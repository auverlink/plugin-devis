<?php



// Lancement de la session
session_start();


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
    return $e;
}


?>



<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>

<p>Vous avez une idée, un projet web mais vous ne savez pas par quoi commencer.
    Ce formulaire va vous aider à trouver la formulaire la plus adéquate pour vous lancer.</p>

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









