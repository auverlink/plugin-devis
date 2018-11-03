<?php
// Lancement de la session
session_start();
?>


<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>


<form method="post" action="postNbPages.php">

    <div>Combien de pages contiendra votre site ?</div>

    <input type="radio" name="pages" value="Five pages" />Entre 1 et 5 pages
    <br />
    <input type="radio" name="pages" value="Ten pages" />De 6 à 10 pages
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>


    <?php if(array_key_exists('errors', $_SESSION)): ?>

    <?= implode('<br>', $_SESSION['errors']); ?>

    <?php unset($_SESSION['errors']); endif ?>

</body>
</html>