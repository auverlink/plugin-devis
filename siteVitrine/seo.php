<?php
// Lancement de la session
session_start();
?>



<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>


<form method="post" action="postSeo.php">

    <div>Souhaitez-vous que l'on optimise le référencement de votre site pour qu'il soit plus visible sur les moteurs de recherche ?</div>

    <input type="radio" name="seo" value="yes" />Oui
    <br/>
    <input type="radio" name="seo" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>


<br/>

    <?php if(array_key_exists('errors', $_SESSION)): ?>

    <?= implode('<br>', $_SESSION['errors']); ?>

    <?php unset($_SESSION['errors']); endif ?>


</body>
</html>