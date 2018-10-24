<?php

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



<html>
<body>
<form method="post">

    <div>Combien de pages contiendra votre site ?</div>

    <input type="radio" name="pages" value="One page" />Uniquement 1 page
    <br/>
    <input type="radio" name="pages" value="Five pages" />Entre 1 et 5 pages
    <br />
    <input type="radio" name="pages" value="Ten pages" />De 6 à 10 pages
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>
</body>
</html>